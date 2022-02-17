<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:55:39
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\productoEspecifico.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eb4db6fc947_09144801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '204cdd59154fba2f4103025498570b1303368cbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\productoEspecifico.tpl',
      1 => 1637790921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/vue/comentarios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619eb4db6fc947_09144801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->nombre_prod;
$_prefixVariable1 = ob_get_clean();
echo ($_smarty_tpl->tpl_vars['titulo']->value).($_prefixVariable1);?>
</h1>
<div class="prod-detalle">
    <div class="descripcion-prod">
        <ul class="allProd_group list-group">
            <li class="list-group-item">Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</li>
            <li class="list-group-item">Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 $</li>
            <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
            <li class="list-group-item">Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
        </ul>
    </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value->imagen))) {?>
            <div class="img-prod">
                <img class="imagen" src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
"/>
            </div>
        <?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['sesion']->value == 0 || $_smarty_tpl->tpl_vars['sesion']->value == 1) {?>
<div class="form-floating">
    <div class="contenedor-coment">
        <h3>Deja una reseña sobre el producto:</h3>
        <form class="form-coment">
            <textarea class="text_coment form-control" placeholder="Deja un comentario aqui" id="floatingTextarea2" style="height: 100px" name="texto" required></textarea>
            <label>Deja un puntaje del producto</label><select class="puntaje">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" value="Comentar" class="btn-coment">
        </form>
    </div>
    <div class="contenedor-filtro">
    <h3>Filtra los comentarios por puntaje:</h3>
        <form class="form-filtro">
        <label><strong>Puntaje: </label></strong><select class="filtro_puntaje">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Buscar" class="btn-filtro">
    </form>
    </div>
</div>
<?php } else { ?>
    <div class="card w-75">
      <div class="card-body">
        <h5 class="card-title">¿Quieres dejar una reseña? Inicia sesion o registrate si no lo estas.</h5>
        <a href="administrar" class="btn btn-primary">Iniciar sesion</a>
      </div>
    </div>
<?php }?>
<div class="id" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" data-rol="<?php echo $_smarty_tpl->tpl_vars['sesion']->value;?>
" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
    <?php $_smarty_tpl->_subTemplateRender('file:templates/vue/comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
