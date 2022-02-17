<?php
/* Smarty version 3.1.39, created on 2021-11-03 19:25:31
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\vue\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6182d41b427a59_03910076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2776d5d2a061ca0e0cf7c18c5505f5aa319a98c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\vue\\productos.tpl',
      1 => 1635963923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6182d41b427a59_03910076 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="appProd">
        <ul class="allProd_group list-group" v-for="producto in productos">
            <li class="list-group-item">Nombre: {{producto.nombre_prod}}</li>
            <li class="list-group-item">Marca: {{producto.marca}}</li>
            <li class="list-group-item">Categoria: {{producto.nombre}}</li>
            <li class="allProd_item list-group-item"><a v-bind:href="producto.id" >Mas informacion</a></li>
        </ul>
    </div>
    
<?php }
}
