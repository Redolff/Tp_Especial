<?php

    class modelComentarios{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=indumentaria;charset=utf8', 'root', '');
        }

        function getComentarios($id){
            $sentencia = $this->db->prepare('SELECT * FROM comentarios WHERE Id_producto = ?');
            $sentencia->execute([$id]);
            $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $comentarios;
        }

        function getComentario($id){
            $sentencia = $this->db->prepare('SELECT * FROM comentarios WHERE Id = ?');
            $sentencia->execute([$id]);
            $comentario = $sentencia->fetch(PDO::FETCH_OBJ);

            return $comentario;
        }

        function insertComentario($id, $texto, $user, $puntaje){
            $sentencia = $this->db->prepare('INSERT INTO comentarios (Id_producto, Texto, User_coment, Puntaje) VALUES (?,?,?,?)');
            $sentencia->execute(array($id, $texto, $user, $puntaje));
            return $this->db->lastInsertId();
        }

        function deleteComentario($id){
            $sentencia = $this->db->prepare('DELETE FROM comentarios WHERE Id = ?');
            $sentencia->execute(array($id));
        }

    }


?>