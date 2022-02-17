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

<h2 class="title-edit-users"> {$titulo} </h2>
{foreach from=$usuarios item=usuario}
    <ul>        
        <li>Nombre: {$usuario->Nombre} </li>
        <li>Email: {$usuario->Email} </li>
        <li>  {if {$usuario->Admin} eq 0} 
            <a href="editarUsuario/{$usuario->Email}"><button type="button">Hacer Admin</button></a>
            {elseif {$usuario->Admin} eq 1}   
            <a href="editarUsuario/{$usuario->Email}"><button type="button">Quitar Admin</button></a>
            {/if} </li>
        <li><a href="borrarUsuario/{$usuario->Id_usuario}">Eliminar</a></li>
    </ul>
{/foreach}