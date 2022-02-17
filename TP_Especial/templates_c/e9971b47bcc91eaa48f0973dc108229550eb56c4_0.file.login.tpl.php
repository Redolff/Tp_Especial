<?php
/* Smarty version 3.1.39, created on 2022-02-15 10:37:56
  from 'C:\xampp\htdocs\TP_Especial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620b74741060c9_51980882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9971b47bcc91eaa48f0973dc108229550eb56c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\login.tpl',
      1 => 1644917724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_620b74741060c9_51980882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <h2 class="title-form"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
    <form class="form-alta" action="verify" method="POST">
        <input class="form-control" type="text" name="email" placeholder="Email: " required><br>
        <input class="form-control" type="password" name="password" placeholder="Contraseña: ">
        <input class="boton" type="submit" value="Ingresar">
    </form>
    <h2 class="title-form"> Registrarse: </h2>
    <form class="form-alta" action="registro" method="POST">
        <input class="form-control" type="text" name="nombre" placeholder="Nombre de usuario:" required><br>
        <input class="form-control" type="text" name="email" placeholder="Email:" required><br>
        <input class="form-control" type="password" name="password" placeholder="Contraseña:" required>
        <input class="boton" type="submit" value="Registrarse">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
