{include file="templates/header.tpl"}
<header class="navbar navbar-dark bg-dark">
    <div>
        <h1 class="card-title"><a class="link-title"href="home">New Sports Clothing</a></h1>
    </div>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li class="nav-link active" aria-current="page"><a class="nav-item" href="categorias">Categorias</a></li>
                </div>
                <div class="col">
                    <li class="nav-link active" aria-current="page"><a class="nav-item" href="home">Todos los productos</a></li>
                </div>
                <div class="col">
                    <li class="nav-link active" aria-current="page"><a class="nav-item" href="administrar">Administrar</a></li>
                </div>
                    </ul>
            </div>
        </div>
    </nav>
</header>

<h2 class="title-edit-cat"> {$titulo} </h2>
<form action="agregarCat" method="POST">
    <input type="text" name="categoria" placeholder="Categoria">
    <input type="submit">
</form>
<h2 class="title-edit-cat">Editar Categoria:</h2>
{foreach from=$categorias item=categoria}
    <ul>    
        <li> Categoria: {$categoria->Categoria} </li>
        <li> <form action="editarCat/{$categoria->Id_categoria}" method="POST">
            <input type="text" name="categoria" placeholder="Cambiar nombre de la categoria">
            <input type="submit" value="Cambiar">
        </form> </li>
    </ul>    
{/foreach}

<h2 class="title-edit-cat">Borrar alguna categoria:</h2>
<h5 class="error-edit-cat"> {if {$error}} No se puede borrar la categoria porque tiene productos asignados {/if} </h5>
<ul>
    {foreach from=$categorias item=$categoria}
    <li> Categoria: {$categoria->Categoria} <a href="borrarCat/{$categoria->Id_categoria}">Borrar</a></li> 
    {/foreach}
</ul>

{include file="templates/footer.tpl"}