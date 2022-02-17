<?php
/* Smarty version 3.1.39, created on 2022-02-15 08:25:25
  from 'C:\xampp\htdocs\TP_Especial\templates\seccionAdministracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620b5565b5f714_75755104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac1f912bb43f713e616ac11c9e9625a44e4832e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\seccionAdministracion.tpl',
      1 => 1644909923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_620b5565b5f714_75755104 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="container-fluid">
    <h2 class="title-adm"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
    <a href="logout" class="nav-item">Cerrar Sesion</a>
    <div class="cards">
        <div class="row">
          <div class="col-sm-6" id="card-cat">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Haz modificaciones en los productos</h5>
                <p class="card-text">En esta seccion podras cambiar el precio de un producto, borrarlo o agregar uno nuevo.</p>
                <a href="seccionProducto" class="btn btn-primary">Modificar Productos</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6" id="card-prod">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Haz modificaciones en las categorias</h5>
                <p class="card-text">En esta seccion podras cambiar el nombre de una categoria, borrarla o agregar una nueva.</p>
                <a href="seccionCategoria" class="btn btn-primary">Modificar Categorias</a>
              </div>
            </div>
          </div>
        </div>
          <div class="col-sm-6" id="card-user">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Haz modificaciones en los usuarios</h5>
                <p class="card-text">En esta seccion podras asignar un rol a un usuario o eliminarlo.</p>
                <a href="seccionUsuario" class="btn btn-primary">Modificar Usuarios</a>
              </div>
            </div>
          </div>
        </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
