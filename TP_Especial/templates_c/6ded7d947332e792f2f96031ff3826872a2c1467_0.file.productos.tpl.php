<?php
/* Smarty version 3.1.39, created on 2021-11-23 18:34:15
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d2617cc0c61_11365136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ded7d947332e792f2f96031ff3826872a2c1467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\productos.tpl',
      1 => 1637688854,
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
function content_619d2617cc0c61_11365136 (Smarty_Internal_Template $_smarty_tpl) {
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
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['pagina']->value == 1) {?>
                <li class="page-item"><a class="page-link" href="productos/1">Anterior</a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link" href="productos/<?php echo $_smarty_tpl->tpl_vars['pagina']->value-1;?>
">Anterior</a></li> 
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, range(1,$_smarty_tpl->tpl_vars['cantidad']->value), 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                 <li class="page-item"><a class="page-link" href="productos/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['pagina']->value == $_smarty_tpl->tpl_vars['cantidad']->value) {?>
                <li class="page-item"><a class="page-link" href="productos/<?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
">Siguiente</a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link" href="productos/<?php echo $_smarty_tpl->tpl_vars['pagina']->value+1;?>
">Siguiente</a></li>
            <?php }?>
        </ul>
    </nav>
</div>
<div class="form_busq">
    <form action="avanzada/precio" method="post" class="form_precio">
        <h4>Productos con un precio menor a: </h4>
        <input class="input_precio form-control" type=number name=precio placeholder="Precio...">
        <input class="btn btn-primary btn-sm" type=submit value=Aplicar>
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
        <input class="btn btn-primary btn-sm" type=submit value=Aplicar>
    </form>
</div>       
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
