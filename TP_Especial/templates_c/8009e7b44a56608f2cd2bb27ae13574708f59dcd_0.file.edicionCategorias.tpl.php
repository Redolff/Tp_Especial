<?php
/* Smarty version 3.1.39, created on 2021-11-25 06:01:19
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\edicionCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f189fe0f7e5_10293445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8009e7b44a56608f2cd2bb27ae13574708f59dcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\edicionCategorias.tpl',
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
function content_619f189fe0f7e5_10293445 (Smarty_Internal_Template $_smarty_tpl) {
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

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<h1>
<div class="categoriasEdit">
<div class="add_categoria">
<h2>Agrega una nueva categoria: </h2>
    
<form class="form-alta" action=agregarCat method=post>
        <input class=" form-control" type=text name=nombre placeholder="Nombre de la categoria" required>
        <button type="submit" class="btn btn-secondary">Enviar</button>
</form>
</div>

<div class="edit_categoria">
<h2>Cambia el nombre de la categoria: </h2>

    <form class="form-alta" action=editarCat method=post>
        <input class=" form-control" type=text name=nombreAnt placeholder="Nombre de la categoria que le quieras cambiar el nombre" required>
        <input class=" form-control" type=text name=nombreNew placeholder="Nuevo nombre de la categoria" required>
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>
</div>
</div>

<h3>Borra alguna categoria</h3>
<h3 class="alert-danger"><?php if ($_smarty_tpl->tpl_vars['error']->value) {?>No se puede borrar la categoria porque tiene productos asignados.<?php }?></h3>
    <ul class="allCat list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cate');
$_smarty_tpl->tpl_vars['cate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->do_else = false;
?>
            <li class="list-group-item">ID: <?php echo $_smarty_tpl->tpl_vars['cate']->value->id_tipo;?>
,  Nombre: <?php echo $_smarty_tpl->tpl_vars['cate']->value->nombre;?>
      <a href="borrarCat/<?php echo $_smarty_tpl->tpl_vars['cate']->value->id_tipo;?>
"><button class="btn btn-dark">Borrar</button></a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
