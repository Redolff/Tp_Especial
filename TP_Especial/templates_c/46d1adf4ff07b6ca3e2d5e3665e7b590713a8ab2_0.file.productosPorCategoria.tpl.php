<?php
/* Smarty version 3.1.39, created on 2022-02-10 14:21:45
  from 'C:\xampp\htdocs\TP_Especial\templates\productosPorCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620511698e2e85_78005201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d1adf4ff07b6ca3e2d5e3665e7b590713a8ab2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\productosPorCategoria.tpl',
      1 => 1644499048,
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
function content_620511698e2e85_78005201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3 class='title-prod-cat'> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Categoria;?>
  </h3>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prodXcat']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
    <div class="list-group">
        <ul>
            <li class="list-group-item list-group-item-action">Nombre: <?php echo $_smarty_tpl->tpl_vars['prod']->value->Nombre_prod;?>
 </li>
            <li class="list-group-item list-group-item-action disabled">Marca: <?php echo $_smarty_tpl->tpl_vars['prod']->value->Marca;?>
 </li>
            <li class="list-group-item list-group-item-action">Precio: $<?php echo $_smarty_tpl->tpl_vars['prod']->value->Precio;?>
 </li>
            <li class="list-group-item list-group-item-action disabled">Descripcion: <?php echo $_smarty_tpl->tpl_vars['prod']->value->Descripcion;?>
 </li>
            <li class="list-group-item list-group-item-action disabled">Color: <?php echo $_smarty_tpl->tpl_vars['prod']->value->Color;?>
 </li>
        </ul>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
