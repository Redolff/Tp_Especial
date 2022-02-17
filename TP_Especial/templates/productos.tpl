{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<h1 class="titleprod"> {$titulo} </h1>
{foreach from=$productos item=producto}
    <div class="list-group">
        <ul>
            <li class="list-group-item list-group-item-action disabled">Nombre: {$producto->Nombre_prod} </li>
            <li class="list-group-item list-group-item-action disabled">Marca: {$producto->Marca} </li>
            <li class="list-group-item list-group-item-action">Categoria: {$producto->Categoria} </li>
            <li class="list-group-item list-group-item-action"><a href="{$producto->Id}">Detalle del producto</a></li>
        </ul>
    </div>
{/foreach}

{include file="templates/footer.tpl"}