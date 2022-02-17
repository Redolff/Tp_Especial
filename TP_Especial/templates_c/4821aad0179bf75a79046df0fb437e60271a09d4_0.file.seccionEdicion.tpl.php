<?php
/* Smarty version 3.1.39, created on 2021-11-25 05:45:50
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\seccionEdicion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f14feea3664_11983405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4821aad0179bf75a79046df0fb437e60271a09d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\seccionEdicion.tpl',
      1 => 1637802285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619f14feea3664_11983405 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="administrar">Administrar</a></li>
          </ul>
        </nav>  
</header>
<div class="container-fluid">

<a href="cerrar" class="btnCerrar btn-primary btn-lg">Cerrar sesion</a>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div class="cards">
<div class="row">
  <div class="col-sm-6" id="card-cat">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Haz modificaciones en las categorias</h5>
        <p class="card-text">En esta seccion podras cambiar el nombre de una categoria, borrarla o agregar una nueva.</p>
        <a href="seccionCat" class="btn btn-primary">Modificar Categorias</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" id="card-prod">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Haz modificaciones en los productos</h5>
        <p class="card-text">En esta seccion podras cambiar el nombre de una ctegoria, borrarla o agregar una nueva.</p>
        <a href="seccionProd" class="btn btn-primary">Modificar Productos</a>
      </div>
    </div>
  </div>
</div>
  <div class="col-sm-6" id="card-user">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Haz modificaciones en los usuarios</h5>
        <p class="card-text">En esta seccion podras asignar un rol a un usuario o eliminarlo.</p>
        <a href="seccionUser" class="btn btn-primary">Modificar Usuarios</a>
      </div>
    </div>
  </div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
