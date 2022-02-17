<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:29:11
  from 'C:\xampp\htdocs\proyectos\TrabajoEspecialPt1\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebcb7e39709_48505453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d8039780656f3fdf27928317ee2e09a4efcb06e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TrabajoEspecialPt1\\templates\\vue\\comentarios.tpl',
      1 => 1637792949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ebcb7e39709_48505453 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="appComent">
    <h1>{{titulo}}</h1>
        <div class="lista_comentarios" v-for="comentario in comentarios">
            <div class="caja_img">
                <h6><img src="img/usuario.png" class="img_user"></h6>
            </div>
            <div class="caja_coment">
                <div class="datos_coment"> 
                    <h5 class="user_coment">{{comentario.user_coment}}</h5>
                    <p class="fecha_coment">{{comentario.fecha}}</p>
                </div>
                <p class="comentario" v-if="rol" >{{comentario.texto}} - Puntaje: {{comentario.puntaje}}<button v-on:click="eliminarComentario(comentario.id)" :borrar="comentario.id" id="borrar" class="btn-borrar">Borrar</button></p>
                <p class="comentario" v-else>{{comentario.texto}} - Puntaje: {{comentario.puntaje}}</p>
            </div>
        </div>
    </div>
    
<?php }
}
