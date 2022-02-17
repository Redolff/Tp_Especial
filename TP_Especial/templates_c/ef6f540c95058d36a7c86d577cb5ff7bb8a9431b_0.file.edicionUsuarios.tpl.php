<?php
/* Smarty version 3.1.39, created on 2021-11-25 05:46:33
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\edicionUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f15290b06d4_67599301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef6f540c95058d36a7c86d577cb5ff7bb8a9431b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\edicionUsuarios.tpl',
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
function content_619f15290b06d4_67599301 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>Da permiso o borra algun usuario</h3>
    <ul class="allCat list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <li class="list-group-item">ID: <?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
,  User: <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

             <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 0) {?>
             <a href="modificarRol/<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"><button type="button" class="btn btn-outline-primary">Hacer Admin</button></a>
             <?php } else { ?>
                 <a href="modificarRol/<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"><button type="button" class="btn btn-outline-primary">Quitar Admin</button></a>
             <?php }?>
             <a href="borrarUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_usuario;?>
"><button class="btn btn-dark">Borrar</button></a>
             </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
