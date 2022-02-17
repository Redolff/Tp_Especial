<?php

    class modelCategoria{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=indumentaria;charset=utf8', 'root', '');
        }

        function getAllCategorias(){
            $sentencia = $this->db->prepare('SELECT * FROM categorias');
            $sentencia->execute();
            $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $categorias;
        }

        function getProductosPorCategoria($id){
            $sentencia = $this->db->prepare('SELECT * FROM productos WHERE Id_categoria = ?');
            $sentencia->execute(array($id));
            $productosPorCategoria = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $productosPorCategoria;
        }

        function getCategoria($id){
            $sentencia = $this->db->prepare('SELECT * FROM categorias WHERE Id_categoria = ?');
            $sentencia->execute(array($id));
            $categoria = $sentencia->fetch(PDO::FETCH_OBJ);

            return $categoria;
        }

        function insertarCategoria($categoria){
            $sentencia = $this->db->prepare('INSERT INTO categorias (Categoria) VALUES (?)');
            $sentencia->execute([$categoria]);
        }

        function deleteCategoria($id){
            $sentencia = $this->db->prepare('DELETE FROM categorias WHERE Id_categoria = ?');
            $sentencia->execute(array($id));
        }

        function editCategoria($categoria, $id){
            $sentencia = $this->db->prepare('UPDATE categorias SET Categoria = ? WHERE Id_categoria = ?');
            $sentencia->execute(array($categoria, $id));
        }

    }


?>