<?php
    require_once('./Controllers/controllerProductos.php');
    require_once('./Controllers/controllerCategorias.php');
    require_once('./Controllers/controllerUsuarios.php');
    require_once('./Controllers/ControllerApi.php');

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = 'home'; //Accion por defecto si no se envian
    }

    $params = explode('/', $action);

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $controllerProductos = new controllerProductos();
    $controllerCategorias = new controllerCategorias();
    $controllerUsuarios = new controllerUsuarios();

    switch($params[0]){
        case 'home' : {
            $controllerProductos->showHome();
            break;
        }
        case 'categorias' : {
            $controllerCategorias->showCategorias($params[0]);
            break;
        }
        case 'prodXcat' : {
            $controllerCategorias->showProductosPorCategoria($params[1]);
            break;
        }
        case is_numeric($params[0]) : {
            $controllerProductos->showDetalleDelProducto($params[0]);
            break;
        }
        case 'login' : {
            $controllerUsuarios->showLogin();
            break;
        }
        case 'verify' : {
            $controllerUsuarios->showVerificarUsuario();
            break;
        }
        case 'administrar' : {
            $controllerUsuarios->showAdministracion();
            break;
        }
        case 'logout' : {
            $controllerUsuarios->showCerrarSesion();
            break;
        }
        case 'registro' : {
            $controllerUsuarios->showRegistrarUsuario();
            break;
        }
        case 'seccionProducto' : {
            $controllerUsuarios->showEdicionProductos();   
            break;
        }
        case 'agregarProd' : {
            $controllerProductos->showInsertarProducto();
            break;
        }
        case 'borrarProd' : {
            $controllerProductos->showDeleteProducto($params[1]);
            break;
        }
        case 'editarProd' : {
            $controllerProductos->showEditProducto($params[1]);
            break;
        }
        case 'seccionCategoria' : {
            $controllerUsuarios->showEdicionCategorias(false);
            break;
        }
        case 'agregarCat' : {
            $controllerCategorias->showInsertarCategoria();
            break;
        }
        case 'borrarCat' : {
            $controllerCategorias->showDeleteCategoria($params[1]);
            break;
        }
        case 'editarCat' : {
            $controllerCategorias->showEditCategoria($params[1]);
            break;
        }
        case 'seccionUsuario': {
            $controllerUsuarios->showEdicionUsuarios();
            break;
        }
        case 'borrarUsuario': {
            $controllerUsuarios->showDeleteUsuario($params[1]);
            break;
        }
        case 'editarUsuario': {
            $controllerUsuarios->showEditUsuario($params[1]);
            break;
        }
        case 'default' : {
            echo ('404 Page not found');
            break;
        }
    }



?>