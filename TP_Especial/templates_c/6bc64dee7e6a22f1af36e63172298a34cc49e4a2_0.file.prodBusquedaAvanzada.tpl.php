<?php
/* Smarty version 3.1.39, created on 2021-11-25 05:53:17
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\prodBusquedaAvanzada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f16bd542127_23563239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc64dee7e6a22f1af36e63172298a34cc49e4a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\prodBusquedaAvanzada.tpl',
      1 => 1637802285,
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
function content_619f16bd542127_23563239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="productos">

<div class="exp_prod">
    <h1 class="title_prod"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
        <ul class="allProd_group list-group">
            <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_prod;?>
</li>
            <li class="list-group-item">Marca: <?php echo $_smarty_tpl->tpl_vars['prod']->value->marca;?>
</li>
            <li class="list-group-item">Categoria: <?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre;?>
</li>
            <li class="allProd_item list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['prod']->value->id;?>
">Mas informacion</a></li>
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="form_busq">
    <form action="avanzada/precio" method="post" class="form_precio">
        <h4>Productos con un precio menor a: </h4>
        <input class="input_precio form-control" type=number name=precio placeholder="Precio...">
        <input class="btn btn-primary btn-sm" type=submit value="Aplicar">
    </form>

    <form action="avanzada/marca" method="post" class="form_marca">
        <h4>Productos de la marca:  </h4>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
            <label><input type="checkbox" name="marca" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->marca;?>
"> <?php echo $_smarty_tpl->tpl_vars['marca']->value->marca;?>
</label><br>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <input class="btn btn-primary btn-sm" type=submit value="Aplicar">
    </form>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
