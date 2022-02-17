<?php
/* Smarty version 3.1.39, created on 2021-11-04 01:09:39
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618324c330b8a4_05393001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa46df36e2bd26c8ce604bd31601c16dadacbc0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\nav.tpl',
      1 => 1635984572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618324c330b8a4_05393001 (Smarty_Internal_Template $_smarty_tpl) {
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
