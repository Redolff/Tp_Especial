<?php

    class modelUsuarios{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=indumentaria;charset=utf8', 'root', '');
        }

        function insertUsuario($email, $nombre, $password){
            $sentencia = $this->db->prepare('INSERT INTO usuarios (Email, Nombre, password, Admin) VALUES (?, ?, ?, 0)');
            $sentencia->execute([$email, $nombre, $password]);   
        }

        function getUsuario($email){
            $sentencia = $this->db->prepare('SELECT * FROM usuarios WHERE Email = ?');
            $sentencia->execute(array($email));
            $usuario = $sentencia->fetch(PDO::FETCH_OBJ);

            return $usuario;
        }

        function getUsuarios(){
            $sentencia = $this->db->prepare('SELECT * FROM usuarios');
            $sentencia->execute();
            $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $usuarios;
        }

        function deleteUsuario($id){
            $sentencia = $this->db->prepare('DELETE FROM usuarios WHERE Id_usuario = ?');
            $sentencia->execute(array($id));
        }

        function editUsuario($admin, $email){
            $sentencia = $this->db->prepare('UPDATE usuarios SET Admin = ? WHERE Email = ?');
            $sentencia->execute(array($admin, $email));
        }

    }

?>