<?php
/* Smarty version 3.1.39, created on 2022-02-10 14:11:47
  from 'C:\xampp\htdocs\TP_Especial\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62050f13a860d4_26759170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41626b69cb61611c4bd8d8b75dd9be74e4244e27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\productos.tpl',
      1 => 1644498235,
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
function content_62050f13a860d4_26759170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="titleprod"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
    <div class="list-group">
        <ul>
            <li class="list-group-item list-group-item-action disabled">Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre_prod;?>
 </li>
            <li class="list-group-item list-group-item-action disabled">Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Marca;?>
 </li>
            <li class="list-group-item list-group-item-action">Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Categoria;?>
 </li>
            <li class="list-group-item list-group-item-action"><a href="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
">Detalle del producto</a></li>
        </ul>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
