{literal}

    
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
        


{/literal}