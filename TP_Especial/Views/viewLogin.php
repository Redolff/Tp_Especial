<?php
    require_once('./libs/smarty-3.1.39/libs/SmartyBC.class.php');

    class viewLogin{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function renderViewLogin($sesion){
            $this->smarty->assign('titulo', 'Iniciar sesion: ');
            $this->smarty->assign('sesion', $sesion);

            $this->smarty->display('./templates/login.tpl');
        }

        function renderViewSeccionAdministracion(){
            $this->smarty->assign('titulo', 'Seccion de Administracion: ');

            $this->smarty->display('./templates/seccionAdministracion.tpl');
        }

        function renderViewEdicionProductos($categorias, $productos){
            $this->smarty->assign('titulo', 'Agregar nuevo producto: ');
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('productos', $productos);

            $this->smarty->display('./templates/edicionProductos.tpl');
        }

        function renderViewEdicionCategorias($categorias, $error){
            $this->smarty->assign('titulo', 'Agregar nueva categoria: ');
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('error', $error);

            $this->smarty->display('./templates/edicionCategorias.tpl');
        }
        
        function renderViewEdicionUsuarios($usuarios){
            $this->smarty->assign('titulo', 'Lista de usuarios: ');
            $this->smarty->assign('usuarios', $usuarios);

            $this->smarty->display('./templates/usuarios.tpl');
        }

    }

?>