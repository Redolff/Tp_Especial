{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<div class="container-fluid">
    <h2 class="title-form"> {$titulo} </h2>
    <form class="form-alta" action="verify" method="POST">
        <input class="form-control" type="text" name="email" placeholder="Email: " required><br>
        <input class="form-control" type="password" name="password" placeholder="Contraseña: ">
        <input class="boton" type="submit" value="Ingresar">
    </form>
    <h2 class="title-form"> Registrarse: </h2>
    <form class="form-alta" action="registro" method="POST">
        <input class="form-control" type="text" name="nombre" placeholder="Nombre de usuario:" required><br>
        <input class="form-control" type="text" name="email" placeholder="Email:" required><br>
        <input class="form-control" type="password" name="password" placeholder="Contraseña:" required>
        <input class="boton" type="submit" value="Registrarse">
    </form>
</div>

{include file="templates/footer.tpl"}