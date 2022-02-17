<?php
/* Smarty version 3.1.39, created on 2021-11-25 05:52:34
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\productoXcat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f1692e78524_49159512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c659ea8d3954d03d44cdd641124785e39083a7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\productoXcat.tpl',
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
function content_619f1692e78524_49159512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="catYprod">
<div class="categorias">
<h1><?php echo $_smarty_tpl->tpl_vars['titulo1']->value;?>
</h1>
    <ul class="allCat list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cate');
$_smarty_tpl->tpl_vars['cate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->do_else = false;
?>
            <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['cate']->value->nombre;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>    

<div class="prodXcat">
<h3 class="display-5"><?php echo $_smarty_tpl->tpl_vars['titulo2']->value;?>
</h3>
    <form action="buscar" method="post">
        <select name="categoria">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cate');
$_smarty_tpl->tpl_vars['cate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cate']->value->id_tipo;?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="submit" value="Buscar">
    </form> 
<h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['categoriaProd']->value->nombre;
$_prefixVariable1 = ob_get_clean();
echo ($_smarty_tpl->tpl_vars['titulo3']->value).($_prefixVariable1);?>
</h3>

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
        <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['prod']->value->descripcion;?>
</li>
        <li class="list-group-item">Precio: <?php echo $_smarty_tpl->tpl_vars['prod']->value->precio;?>
$</li>
    </ul>  
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
