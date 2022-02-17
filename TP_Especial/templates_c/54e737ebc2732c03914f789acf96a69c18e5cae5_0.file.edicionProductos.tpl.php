<?php
/* Smarty version 3.1.39, created on 2022-02-15 09:36:42
  from 'C:\xampp\htdocs\TP_Especial\templates\edicionProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620b661a182258_19235365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54e737ebc2732c03914f789acf96a69c18e5cae5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\edicionProductos.tpl',
      1 => 1644911450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_620b661a182258_19235365 (Smarty_Internal_Template $_smarty_tpl) {
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

<h2 class="title-edit-prod"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
<form action="agregarProd" method="POST">
    <input type="text" name="nombre" placeholder="Nombre del producto" required><br>
    <input type="text" name="color" placeholder="Color" required><br>
    <input type="text" name="marca" placeholder="Marca" required><br>
    <input type="number" name="precio" placeholder="Precio" required><br>
    <input type="textarea" name="descripcion" placeholder="Descripcion del producto" required><br>
    <select name="categorias">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->Id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Categoria;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input type="submit">
</form>
<h2 class="title-edit-prod">Borrar Producto:</h2>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
    <ul>
        <li> Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre_prod;?>
 </li>
        <li> Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Marca;?>
 </li>
        <li> Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
 </li>
        <li> Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Categoria;?>
 </li>
        <li> <a href="borrarProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Borrar producto</a></li>
        <li> <form action="editarProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
" method="POST">
            <input type="number" name="precio" placeholder="Cambiar precio">
            <input type="submit" value="Cambiar">
        </form> </li>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
