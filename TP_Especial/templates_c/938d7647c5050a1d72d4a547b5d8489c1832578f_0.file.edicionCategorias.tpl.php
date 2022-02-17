<?php
/* Smarty version 3.1.39, created on 2022-02-16 08:31:24
  from 'C:\xampp\htdocs\TP_Especial\templates\edicionCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620ca84c1eef51_90391002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '938d7647c5050a1d72d4a547b5d8489c1832578f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\edicionCategorias.tpl',
      1 => 1644996657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_620ca84c1eef51_90391002 (Smarty_Internal_Template $_smarty_tpl) {
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

<h2 class="title-edit-cat"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
<form action="agregarCat" method="POST">
    <input type="text" name="categoria" placeholder="Categoria">
    <input type="submit">
</form>
<h2 class="title-edit-cat">Editar Categoria:</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <ul>    
        <li> Categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Categoria;?>
 </li>
        <li> <form action="editarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->Id_categoria;?>
" method="POST">
            <input type="text" name="categoria" placeholder="Cambiar nombre de la categoria">
            <input type="submit" value="Cambiar">
        </form> </li>
    </ul>    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<h2 class="title-edit-cat">Borrar alguna categoria:</h2>
<h5 class="error-edit-cat"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['error']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?> No se puede borrar la categoria porque tiene productos asignados <?php }?> </h5>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <li> Categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Categoria;?>
 <a href="borrarCat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->Id_categoria;?>
">Borrar</a></li> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
