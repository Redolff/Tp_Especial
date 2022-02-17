<?php
    require_once('./Models/ModelProductos.php');
    require_once('./Views/ViewProductos.php');
    require_once('./Controllers/controllerUsuarios.php');

    class controllerProductos{
        
        private $model;
        private $view;
        private $controllerUser;

        function __construct(){
            $this->model = new modelProductos();
            $this->view = new viewProductos();
            $this->controllerUser = new controllerUsuarios();
        }

        function showHome(){
            $productos = $this->model->getAllProductos();
            $this->view->renderViewHome($productos, $this->controllerUser->showAdminOUsuario());
        }

        function showDetalleDelProducto($id){
            $producto = $this->model->getDetalleProductos($id);
            $this->view->renderViewDetalleProducto($producto, $this->controllerUser->showAdminOUsuario());
        }

        function showInsertarProducto(){
            $this->controllerUser->showLoginAdmin();
            if(!empty($_POST['nombre']) || !empty($_POST['color']) || !empty($_POST['marca']) || 
                !empty($_POST['precio']) || !empty($_POST['descripcion'])){
                $nombre = $_POST['nombre'];
                $color = $_POST['color'];
                $marca = $_POST['marca'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                $id = $_POST['categorias'];
                $this->model->insertProducto($nombre, $descripcion, $color, $marca, $precio, $id);
                header("Location: ".BASE_URL."seccionProducto");
            }
        }

        function showDeleteProducto($id){
            $this->controllerUser->showLoginAdmin();
            $this->model->deleteProducto($id);
            header("Location: ".BASE_URL."seccionProducto");
        }

        function showEditProducto($id){
            $this->controllerUser->showLoginAdmin();
            $this->model->editProducto($_POST['precio'],$id);
            header("Location: ".BASE_URL."seccionProducto");
        }

    }

?>