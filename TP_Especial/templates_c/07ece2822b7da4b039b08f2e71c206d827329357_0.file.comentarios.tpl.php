<?php
/* Smarty version 3.1.39, created on 2022-03-02 23:35:33
  from 'C:\xampp\htdocs\TP_Especial\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621ff135759a11_05820144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07ece2822b7da4b039b08f2e71c206d827329357' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\vue\\comentarios.tpl',
      1 => 1646260531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621ff135759a11_05820144 (Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div id="app-comentarios">
        <h1> {{titulo}} </h1>
        <div class="lista_comentarios" v-for="comentario in comentarios">
            <div class="caja_comentarios">
                <div class="datos_comentarios">
                    <h5 class="user_coment"> {{comentario.user_coment}} </h5>
                    <p class="fecha_coment"> {{comentario.fecha}} </p>
                </div>
                <p class="comentario" v-if="rol"> {{comentario.texto}} - Puntaje: {{comentario.puntaje}} <button v-on:click="eliminarComentario(comentario.id)" :borrar="comentario.id" id="borrar" class="btn-borrar">Borrar</button> </p>
                <p class="comentario" v-else> {{comentario.texto}} - Puntaje: {{comentario.puntaje}} </p>
            </div>
        </div>
    </div>
        


<?php }
}
