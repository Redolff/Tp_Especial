<?php
/* Smarty version 3.1.39, created on 2021-11-23 17:50:41
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\loginAdministrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d1be1546017_51671026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24944c7e4b6c3c0dc9362dea4786d6e26bc94f2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\loginAdministrar.tpl',
      1 => 1637686239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619d1be1546017_51671026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header class="header">
        <div class="logo">
            <h1 class="king"><a href="">KingComponents</a></h1>
        </div>
        <nav>
          <ul class="navigation">
                <li><a href="categorias">Categorias de productos</a></li>
                <li><a href="productos/1">Todos los productos de la pagina</a></li>
                <li><a href="administrar">Iniciar sesion</a></li>
          </ul>
        </nav>  
</header>
<div class="container-fluid">
<h3 class="display-5"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
    <form class="form-alta" action="login" method="post">
        <input class=" form-control" type="text" name="email" placeholder="Email" required><br>
        <input class=" form-control" type="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" value="Ingresar">
    </form>

<h3>¿No tines cuenta?</h3>
<h4>Registrate:</h4>
<h3 class="alert-danger"><?php if ($_smarty_tpl->tpl_vars['error']->value) {?>El email ingresado ya esta registrado<?php }?></h3>
    <form class="form-alta" action="registro" method="post">
        <input class=" form-control" type="text" name="nombre" placeholder="Nombre de usuario" required><br>
        <input class=" form-control" type="text" name="email" placeholder="Email" required><br>
        <input class=" form-control" type="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" value="Ingresar">
    </form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
