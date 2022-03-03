<?php

    class modelProductos{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=indumentaria;charset=utf8', 'root', '');
        }

        function getAllProductos(){
            $sentencia = $this->db->prepare('SELECT * FROM productos INNER JOIN categorias ON productos.Id_categoria = categorias.Id_categoria');
            $sentencia->execute();
            $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);

            return $productos;
        }

        function getDetalleProductos($id){
            $sentencia = $this->db->prepare('SELECT * FROM productos INNER JOIN categorias ON productos.Id_categoria = categorias.Id_categoria AND productos.Id = ?');
            $sentencia->execute(array($id));
            $producto = $sentencia->fetch(PDO::FETCH_OBJ);

            return $producto;
        }

        function insertProducto($nombre, $descripcion, $color, $marca, $precio, $id){
            $sentencia = $this->db->prepare('INSERT INTO productos (Nombre_prod, Descripcion, Color, Marca, Precio, Id_categoria) VALUES (?,?,?,?,?,?)');
            $sentencia->execute([$nombre, $descripcion, $color, $marca, $precio, $id]);
        }

        function deleteProducto($id){
            $sentencia = $this->db->prepare('DELETE FROM productos WHERE Id = ?');
            $sentencia->execute(array($id));
        }

        function editProducto($precio, $id){
            $sentencia = $this->db->prepare('UPDATE productos SET Precio = ? WHERE Id = ?');
            $sentencia->execute(array($precio, $id));
        }

    }

?>