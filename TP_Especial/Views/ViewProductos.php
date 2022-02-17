<?php
    require_once('./libs/smarty-3.1.39/libs/SmartyBC.class.php');

    class viewProductos{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
        }

        function renderViewHome($productos, $sesion){
            $this->smarty->assign('titulo', 'Nueva ropa deportiva disponible: ');
            $this->smarty->assign('productos', $productos);
            $this->smarty->assign('sesion', $sesion);

            $this->smarty->display('./templates/productos.tpl');
        }
        
        function renderViewDetalleProducto($producto, $sesion, $user = null){
            $this->smarty->assign('titulo', 'Detalle del producto: ');
            $this->smarty->assign('producto', $producto);
            $this->smarty->assign('sesion', $sesion);
            $this->smarty->assign('user', $user);

            $this->smarty->display('./templates/detallesDelProducto.tpl');
        }

    }

?>