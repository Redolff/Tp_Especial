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
                    {if $sesion eq 1}
                        <li class="nav-link active" aria-current="page"><a class="nav-item" href="administrar">Administrar</a></li>
                    {elseif $sesion eq 0}
                        <li class="nav-link active" aria-current="page"><a class="nav-item" href="logout">Cerrar Sesion</a></li>
                    {else}
                    <li class="nav-link active" aria-current="page"><a class="nav-item" href="login">Iniciar Sesion</a></li>
                    {/if}
                </div>
                    </ul>
            </div>
        </div>
    </nav>
</header>