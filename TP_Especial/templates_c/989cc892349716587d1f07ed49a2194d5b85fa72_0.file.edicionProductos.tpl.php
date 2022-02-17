<?php
/* Smarty version 3.1.39, created on 2021-11-17 21:20:39
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\edicionProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61956417084022_32968550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '989cc892349716587d1f07ed49a2194d5b85fa72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\edicionProductos.tpl',
      1 => 1637180436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61956417084022_32968550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<header class="header">
        <div class="logo">
            <h1 class="king"><a href="">KingComponents</a></h1>
        </div>
        <nav>
          <ul class="navigation">
                <li><a href="categorias">Categorias de productos</a></li>
                <li><a href="productos/1">Todos los productos de la pagina</a></li>
                <li><a href="administrar">Administrar</a></li>
          </ul>
        </nav>  
</header>
<div class="container-fluid">

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
            <li class="list-group-item">Precio: <?php echo $_smarty_tpl->tpl_vars['prod']->value->precio;?>
 $</li>
            <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['prod']->value->descripcion;?>
</li>
            <li class="list-group-item">Categoria: <?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre;?>
</li>
            <li class="list-group-item"><a href="borrarProd/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id;?>
"><button class="btn btn-dark">Borrar</button></a></li>
        </ul>
        <form class="allProd_item form-alta" action="editarProd/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id;?>
" method="post">
            <input class="input_precio form-control" type=number name=precio placeholder="Cambia el precio del producto.">
            <input type=submit value=Cambiar>
        </form>
        <?php if (!(isset($_smarty_tpl->tpl_vars['prod']->value->imagen))) {?>
            <form class="allProd_item form-alta" action="insertImg/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id;?>
" method="post" enctype="multipart/form-data">
                <label>Sube una imagen asociada al producto.</label><br>
                <input type="file" name="input_name" id="imageToUpload"><br>
                <input type="submit" value="Subir">
            </form>
        <?php } else { ?>
            <li class="list-group-item"><a href="insertImg/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id;?>
"><button class="btn btn-dark">Borrar imagen asociada</button></a></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>    
<div class="agg_prod">
<h1 class="title_prod">Guarda un producto en la pagina</h1>
    <form class="form-alta" action="agregarProd" method="post" enctype="multipart/form-data">
        <input class=" form-control" type="text" name="nombre" placeholder="Nombre del producto" required><br>
        <input class=" form-control" type="text" name="marca" placeholder="Marca del producto" required><br>
        <input class=" form-control" type="number" name="precio" placeholder="Precio del producto" required><br>
        <input type="file" name="input_name" id="imageToUpload"><br>
        <label>Detalles del producto:</label><br>
        <textarea class="textarea" name="descripcion"></textarea><br>
        <label>Categoria:</label>
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
        <input type="submit" value="Insertar">
    </form>

</div>
</div>
    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
