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

<h2 class="title-edit-prod"> {$titulo} </h2>
<form action="agregarProd" method="POST">
    <input type="text" name="nombre" placeholder="Nombre del producto" required><br>
    <input type="text" name="color" placeholder="Color" required><br>
    <input type="text" name="marca" placeholder="Marca" required><br>
    <input type="number" name="precio" placeholder="Precio" required><br>
    <input type="textarea" name="descripcion" placeholder="Descripcion del producto" required><br>
    <select name="categorias">
        {foreach from=$categorias item=categoria}
        <option value="{$categoria->Id_categoria}">{$categoria->Categoria}</option>
        {/foreach}
    </select>
    <input type="submit">
</form>
<h2 class="title-edit-prod">Borrar Producto:</h2>
{foreach from=$productos item=producto}
    <ul>
        <li> Nombre: {$producto->Nombre_prod} </li>
        <li> Marca: {$producto->Marca} </li>
        <li> Precio: ${$producto->Precio} </li>
        <li> Categoria: {$producto->Categoria} </li>
        <li> <a href="borrarProd/{$producto->Id}">Borrar producto</a></li>
        <li> <form action="editarProd/{$producto->Id}" method="POST">
            <input type="number" name="precio" placeholder="Cambiar precio">
            <input type="submit" value="Cambiar">
        </form> </li>
    </ul>
{/foreach}

{include file="templates/footer.tpl"}