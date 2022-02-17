<?php
/* Smarty version 3.1.39, created on 2022-02-10 14:04:46
  from 'C:\xampp\htdocs\TP_Especial\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62050d6e06ec87_86080255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '485efa102d8755df806d1382bb9a20997e0bcebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\categorias.tpl',
      1 => 1644498270,
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
function content_62050d6e06ec87_86080255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="title_cat"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h2>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <div class="list-group">
            <li class="list-group-item list-group-item-action"> <a href="prodXcat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->Id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Categoria;?>
</a></li>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
