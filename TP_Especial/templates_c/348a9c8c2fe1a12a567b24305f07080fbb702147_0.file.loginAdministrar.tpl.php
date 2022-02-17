<?php
/* Smarty version 3.1.39, created on 2021-11-25 05:19:56
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\loginAdministrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f0eecb25d84_00140840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348a9c8c2fe1a12a567b24305f07080fbb702147' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\loginAdministrar.tpl',
      1 => 1637813960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619f0eecb25d84_00140840 (Smarty_Internal_Template $_smarty_tpl) {
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

<h3>¿No tienes cuenta?</h3>
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
