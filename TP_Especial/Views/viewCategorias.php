<?php
    require_once('./libs/smarty-3.1.39/libs/SmartyBC.class.php');

    class viewCategorias{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function renderViewCategorias($categorias, $sesion){
            $this->smarty->assign('titulo', 'Todas las Categorias: ');
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('sesion', $sesion);

            $this->smarty->display('./templates/categorias.tpl');
        }

        function renderViewProdXCategoria($categoria, $productosPorCategoria, $sesion){
            $this->smarty->assign('titulo', 'Productos de la categoria: ');
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('prodXcat', $productosPorCategoria);
            $this->smarty->assign('sesion', $sesion);

            $this->smarty->display('./templates/productosPorCategoria.tpl');
        }

    }


?>