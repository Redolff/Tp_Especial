<?php
    require_once('./Models/ModelUsuarios.php');
    require_once('./Models/ModelProductos.php');
    require_once('./Models/ModelCategorias.php');
    require_once('./Views/viewLogin.php');
    require_once('./Controllers/controllerProductos.php');

    class controllerUsuarios{

        private $modelUser;
        private $modelProd;
        private $modelCat;
        private $viewLogin;

        function __construct(){
            $this->modelUser = new modelUsuarios();
            $this->modelProd = new modelProductos();
            $this->modelCat = new modelCategoria();
            $this->viewLogin = new viewLogin();
        }

        function showLogin(){
            $this->viewLogin->renderViewLogin($this->showAdminOUsuario());
        }

        function showRegistrarUsuario(){
            if(!empty($_POST['email']) && (!empty($_POST['nombre']) && (!empty($_POST['password'])))){
                $email = $_POST['email'];
                $nombre = $_POST['nombre'];
                $contraseña = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $this->modelUser->insertUsuario($email, $nombre, $contraseña);
                $this->showVerificarUsuario();
                header("Location: ". BASE_URL);
            }
            else{
                header("Location: ".BASE_URL."login");
            }
        }
        
        function showVerificarUsuario(){
            $contraseña = $_POST['password'];
            $email = $_POST['email'];
            $usuario = $this->modelUser->getUsuario($email);

            if($usuario && password_verify($contraseña, $usuario->Password)){
                session_start();
                $_SESSION['user'] = $usuario->Nombre;
                $_SESSION['email'] = $usuario->Email;
                $_SESSION['admin'] = $usuario->Admin;
                header("Location: ". BASE_URL);
                if($_SESSION['admin'] == 1){
                    header("Location: ".BASE_URL."administrar");
                }
            }
            else{
                header("Location: ".BASE_URL."login");
            }
        }

        function showCerrarSesion(){
            session_start();
            session_destroy();
            header("Location: ".BASE_URL. "login");
        }

        function showAdminOUsuario(){
            session_start();
            if((isset($_SESSION['email']) && ($_SESSION['admin'] == 1))){
                return $_SESSION['admin'];
            }
            else if(isset($_SESSION['email']) && ($_SESSION['admin'] == 0)){
                return $_SESSION['admin'];
            }
            else{
                return -1;
            }
        }

        function showLoginAdmin(){
            session_start();
            if(($_SESSION['admin'] != 1)){
                header("Location: ".BASE_URL);
                die();
            }
        }

        function showAdministracion(){
            $this->showLoginAdmin();
            $this->viewLogin->renderViewSeccionAdministracion();
        }

        function showEdicionProductos(){
            $this->showLoginAdmin();
            $categorias = $this->modelCat->getAllCategorias();
            $productos = $this->modelProd->getAllProductos();
            $this->viewLogin->renderViewEdicionProductos($categorias, $productos);
        }

        function showEdicionCategorias($error){
            $this->showLoginAdmin();
            $categorias = $this->modelCat->getAllCategorias();
            $this->viewLogin->renderViewEdicionCategorias($categorias, $error);
        }

        function showEdicionUsuarios(){
            $this->showLoginAdmin();
            $usuarios = $this->modelUser->getUsuarios();
            $this->viewLogin->renderViewEdicionUsuarios($usuarios);
        }

        function showDeleteUsuario($id){
            $this->showLoginAdmin();
            $this->modelUser->deleteUsuario($id);
            header("Location: ".BASE_URL."seccionUsuario");
        }

        function showEditUsuario($email){
            $this->showLoginAdmin();
            $usuario = $this->modelUser->getUsuario($email);
            if($usuario->Admin == 1){
                $this->modelUser->editUsuario(0, $email);
            }
            else{
                $this->modelUser->editUsuario(1, $email);
            }
            header("Location: ".BASE_URL."seccionUsuario");
        }

    }

?>