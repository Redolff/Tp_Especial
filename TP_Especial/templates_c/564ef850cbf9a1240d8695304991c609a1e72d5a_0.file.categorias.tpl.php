<?php
/* Smarty version 3.1.39, created on 2021-11-25 04:52:59
  from 'C:\xampp\htdocs\Web2\Tp_Especial\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f089b6f65e5_93707094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '564ef850cbf9a1240d8695304991c609a1e72d5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\Tp_Especial\\templates\\categorias.tpl',
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
function content_619f089b6f65e5_93707094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="catYprod">
<div class="categorias">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
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
        <input class="btn btn-primary btn-sm" type="submit" value="Buscar">
    </form>
</div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
