{literal}

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
    
{/literal}