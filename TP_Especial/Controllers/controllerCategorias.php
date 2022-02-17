<?php
    require_once('./Models/ModelCategorias.php');
    require_once('./Views/viewCategorias.php');
    require_once('./Controllers/controllerUsuarios.php');

    class controllerCategorias{

        private $model;
        private $view;
        private $viewLogin;
        private $controllerUser;

        function __construct(){
            $this->model = new modelCategoria();
            $this->view = new viewCategorias();
            $this->viewLogin = new viewLogin();
            $this->controllerUser = new controllerUsuarios();
        }

        function showCategorias(){
            $categorias = $this->model->getAllCategorias();
            $this->view->renderViewCategorias($categorias, $this->controllerUser->showAdminOUsuario());
        }

        function showProductosPorCategoria($id){
            $categoria = $this->model->getCategoria($id);
            $prodXcat = $this->model->getProductosPorCategoria($id);
            $this->view->renderViewProdXCategoria($categoria, $prodXcat, $this->controllerUser->showAdminOUsuario());
        }

        function showInsertarCategoria(){
            $this->controllerUser->showLoginAdmin();
            if(isset($_POST['categoria'])){
                $categoria = $_POST['categoria'];
                $this->model->insertarCategoria($categoria);
                header("Location: ".BASE_URL. "seccionCategoria");
            }
        }

        function showDeleteCategoria($id){
            $this->controllerUser->showLoginAdmin();
            $categorias = $this->model->getAllCategorias();
            $prodXcat = $this->model->getProductosPorCategoria($id);
            if($prodXcat){
                $this->viewLogin->renderViewEdicionCategorias($categorias, true);
            }
            else{
                $this->model->deleteCategoria($id);
                header("Location: ".BASE_URL. "seccionCategoria");
            }
        }

        function showEditCategoria($id){
            $this->controllerUser->showLoginAdmin();
            $this->model->editCategoria($_POST['categoria'], $id);
            header("Location: ".BASE_URL."seccionCategoria");
        }

    }

?>