<?php
/* Smarty version 3.1.39, created on 2022-02-16 07:40:41
  from 'C:\xampp\htdocs\TP_Especial\templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620c9c69c6a728_82223226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9d257f71e2a7a217037b5b27e4b6c7e2038ad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\usuarios.tpl',
      1 => 1644993637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_620c9c69c6a728_82223226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header class="navbar navbar-dark bg-dark">
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
                    <li class="nav-link active" aria-current="page"><a class="nav-item" href="administrar">Administrar</a></li>
                </div>
                    </ul>
            </div>
        </div>
    </nav>
</header>

<h2 class="title-edit-users"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
    <ul>        
        <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['usuario']->value->Nombre;?>
 </li>
        <li>Email: <?php echo $_smarty_tpl->tpl_vars['usuario']->value->Email;?>
 </li>
        <li>  <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->Admin;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?> 
            <a href="editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->Email;?>
"><button type="button">Hacer Admin</button></a>
            <?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->Admin;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?>   
            <a href="editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->Email;?>
"><button type="button">Quitar Admin</button></a>
            <?php }}?> </li>
        <li><a href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->Id_usuario;?>
">Eliminar</a></li>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
