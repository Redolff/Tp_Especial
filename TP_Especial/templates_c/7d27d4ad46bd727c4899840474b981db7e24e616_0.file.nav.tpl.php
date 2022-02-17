<?php
/* Smarty version 3.1.39, created on 2022-02-15 11:52:33
  from 'C:\xampp\htdocs\TP_Especial\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620b85f1daf7a1_09717011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d27d4ad46bd727c4899840474b981db7e24e616' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\nav.tpl',
      1 => 1644922351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620b85f1daf7a1_09717011 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="navbar navbar-dark bg-dark">
    <div>
        <h1 class="card-title"><a class="link-title"href="home">New Sports Clothing</a></h1>
    </div>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li class="nav-link active" aria-current="page"><a class="nav-item" href="categorias">Categorias</a></li>
                </div>
                <div class="col">
                    <li class="nav-link active" aria-current="page"><a class="nav-item" href="home">Todos los productos</a></li>
                </div>
                <div class="col">
                    <?php if ($_smarty_tpl->tpl_vars['sesion']->value == 1) {?>
                        <li class="nav-link active" aria-current="page"><a class="nav-item" href="administrar">Administrar</a></li>
                    <?php } elseif ($_smarty_tpl->tpl_vars['sesion']->value == 0) {?>
                        <li class="nav-link active" aria-current="page"><a class="nav-item" href="logout">Cerrar Sesion</a></li>
                    <?php } else { ?>
                    <li class="nav-link active" aria-current="page"><a class="nav-item" href="login">Iniciar Sesion</a></li>
                    <?php }?>
                </div>
                    </ul>
            </div>
        </div>
    </nav>
</header><?php }
}
