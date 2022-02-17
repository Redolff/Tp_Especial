{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<h2 class="titledetalle"> {$titulo} {$producto->Nombre_prod} </h2>
<div class="list-group" id="list-group">
    <ul>
      <li class="list-group-item list-group-item-action disabled">Marca: {$producto->Marca} </li>
      <li class="list-group-item list-group-item-action">Precio: ${$producto->Precio} </li>
      <li class="list-group-item list-group-item-action disabled">Descripcion: {$producto->Descripcion} </li>
      <li class="list-group-item list-group-item-action disabled">Color: {$producto->Color} </li>
      <li class="list-group-item list-group-item-action">Categoria: {$producto->Categoria} </li>  
    </ul>    
</div>
{if {$sesion} eq 1 || {$sesion} eq 0}
  <div class="form-floating">
      <div class="contenedor-coment">
          <h3 class="title-coment">Deja una reseña sobre el producto:</h3>
          <form class="form-coment">
              <textarea class="text_coment form-control" placeholder="Deja un comentario aqui" id="floatingTextarea2" style="width: 90%" name="texto" required></textarea>
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
  </div>
{else}
    <div class="card w-75">
      <div class="card-body">
        <h5 class="card-title">¿Quieres dejar una reseña? Inicia sesion o registrate si no lo estas.</h5>
        <a href="login" class="btn btn-primary">Iniciar sesion</a>
      </div>
    </div>
{/if}
<div class="id" data-id="{$producto->Id}" data-rol="{$sesion}" data-user="{$user}">
    {include file='templates/vue/comentarios.tpl'}
</div>

<script src="js/comentarios.js"></script>
{include file="templates/footer.tpl"}