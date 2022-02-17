{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<h2 class="title_cat"> {$titulo} </h2>
<ul>
    {foreach from=$categorias item=categoria}
        <div class="list-group">
            <li class="list-group-item list-group-item-action"> <a href="prodXcat/{$categoria->Id_categoria}">{$categoria->Categoria}</a></li>
        </div>
    {/foreach}
</ul>


{include file="templates/footer.tpl"}