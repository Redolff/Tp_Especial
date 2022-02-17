<?php
/* Smarty version 3.1.39, created on 2022-02-16 10:43:11
  from 'C:\xampp\htdocs\TP_Especial\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_620cc72f31d0e1_64632654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07ece2822b7da4b039b08f2e71c206d827329357' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP_Especial\\templates\\vue\\comentarios.tpl',
      1 => 1645004585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620cc72f31d0e1_64632654 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="appComent">
    <h1>{{titulo}}</h1>
        <div class="lista_comentarios" v-for="comentario in comentarios">
            <div class="caja_coment">
                <div class="datos_coment"> 
                    <h5 class="user_coment">{{comentario.User_coment}}</h5>
                    <p class="fecha_coment">{{comentario.Fecha}}</p>
                </div>
                <p class="comentario" v-if="rol" >{{comentario.Texto}} - Puntaje: {{comentario.Puntaje}}<button v-on:click="eliminarComentario(comentario.id)" :borrar="comentario.id" id="borrar" class="btn-borrar">Borrar</button></p>
                <p class="comentario" v-else>{{comentario.Texto}} - Puntaje: {{comentario.Puntaje}}</p>
            </div>
        </div>
    </div>
    
<?php }
}
