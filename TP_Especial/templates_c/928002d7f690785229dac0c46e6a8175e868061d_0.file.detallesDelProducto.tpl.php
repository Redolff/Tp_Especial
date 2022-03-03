<?php
/* Smarty version 3.1.39, created on 2022-03-03 00:41:15
  from 'C:\xampp\htdocs\TP_Especial\templates\detallesDelProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6220009baed0c8_97213589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928002d7f690785229dac0c46e6a8175e868061d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\detallesDelProducto.tpl',
      1 => 1646264093,
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
function content_6220009baed0c8_97213589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="titledetalle"> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['producto']->value->Nombre_prod;?>
 </h2>
<div class="list-group" id="list-group">
    <ul>
      <li class="list-group-item list-group-item-action disabled">Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Marca;?>
 </li>
      <li class="list-group-item list-group-item-action">Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
 </li>
      <li class="list-group-item list-group-item-action disabled">Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
 </li>
      <li class="list-group-item list-group-item-action disabled">Color: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Color;?>
 </li>
      <li class="list-group-item list-group-item-action">Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->Categoria;?>
 </li>  
    </ul>    
</div>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['sesion']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['sesion']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == 1 || $_prefixVariable2 == 0) {?>
  <div class="form-floating">
      <div class="contenedor-coment">
          <h3 class="title-coment">Deja una reseña sobre el producto:</h3>
          <form class="form-comentarios">
              <textarea class="text_coment form-control" placeholder="Deja un comentario aqui" id="textArea" style="width: 90%" name="texto" required></textarea>
              <label>Deja un puntaje del producto</label> <select class="puntaje">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
              <input type="submit" value="Comentar" class="btn-coment">
          </form>
      </div>
  </div>
<?php } else { ?>
    <div class="card w-75">
      <div class="card-body">
        <h5 class="card-title">¿Quieres dejar una reseña? Inicia sesion o registrate si no lo estas.</h5>
        <a href="login" class="btn btn-primary">Iniciar sesion</a>
      </div>
    </div>
<?php }?>
<div class="id" data-id="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Id;?>
" data-rol="<?php echo $_smarty_tpl->tpl_vars['sesion']->value;?>
" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
    <?php $_smarty_tpl->_subTemplateRender("file:templates/vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
