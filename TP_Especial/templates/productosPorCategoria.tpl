{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<h3 class='title-prod-cat'> {$titulo} {$categoria->Categoria}  </h3>
{foreach from=$prodXcat item=prod}
    <div class="list-group">
        <ul>
            <li class="list-group-item list-group-item-action">Nombre: {$prod->Nombre_prod} </li>
            <li class="list-group-item list-group-item-action disabled">Marca: {$prod->Marca} </li>
            <li class="list-group-item list-group-item-action">Precio: ${$prod->Precio} </li>
            <li class="list-group-item list-group-item-action disabled">Descripcion: {$prod->Descripcion} </li>
            <li class="list-group-item list-group-item-action disabled">Color: {$prod->Color} </li>
        </ul>
    </div>
{/foreach}
{include file="templates/footer.tpl"}