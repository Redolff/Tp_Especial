<?php
/* Smarty version 3.1.39, created on 2021-09-30 14:40:43
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155b04bb905e5_80771632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '769dfd686223c6afb8f55682d84398008bdad8e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\home.tpl',
      1 => 1633005641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6155b04bb905e5_80771632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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

<h1 class="title_prod">Registrate en la pagina para editarla:</h1>
    <form class="form-alta" action="registro" method="post">
        <input class=" form-control" type="text" name="nombre" placeholder="Nombre de usuario" required><br>
        <input class=" form-control" type="email" name="email" placeholder="Email" required><br>
        <input class=" form-control" type="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" value="Registrarme">
    </form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
