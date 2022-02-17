<?php
/* Smarty version 3.1.39, created on 2021-11-25 04:52:43
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f088b5486a8_29281341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d28383388877b41c9b7338b71f96df204ad3608' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\nav.tpl',
      1 => 1637802285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619f088b5486a8_29281341 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header">
        <div class="logo">
            <h1 class="king"><a href="">KingComponents</a></h1>
        </div>
        <nav>
          <ul class="navigation">
                <li><a href="categorias">Categorias de productos</a></li>
                <li><a href="productos/1">Todos los productos de la pagina</a></li>
                <?php if ($_smarty_tpl->tpl_vars['sesion']->value == 1) {?>
                    <li><a href="administrar">Administrar</a></li>
                <?php } elseif ($_smarty_tpl->tpl_vars['sesion']->value == 0) {?>
                    <li><a href="cerrar">Cerrar sesion</a></li>
                <?php } else { ?>
                    <li><a href="administrar">Iniciar sesion</a></li>       
                <?php }?>
          </ul>
        </nav>  
</header>
<div class="container-fluid"><?php }
}
