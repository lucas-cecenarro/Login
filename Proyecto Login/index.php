<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container">
        <div class="informacion">
            <p class="text-1">Gracias por Visitarnos</p>
            <h2>Bienvenido</h2>
            <hr />
            <p class="text-2">Lorem ipsum dolor sit amet consectetur adipiscing elit vulputate, parturient pulvinar litora nunc cubilia magnis ut hendrerit,
                bibendum hac eget velit mollis auctor molestie. Fringilla consequat nibh sociis turpis hendrerit commodo eget potenti class nascetur, volutpat
                quisque at scelerisque morbi enim convallis nam iaculis egestas erat, nunc facilisi interdum per urna ultricies pellentesque luctus senectus.</p>
        </div>
        <form action="registro_usuario.php" method="POST" class="form">
            <h2>register</h2>
            <p> Quis augue felis dis libero non class est sem luctus ante, taciti integer vestibulum auctor quisque molestie vehicula arcu ad suspendisse,
                fames platea vitae dictumst lacus cras morbi pretium duis. Lobortis congue metus condimentum tristique potenti in sociosqu eget augue suspendisse,
                vestibulum cum a quam non hac leo blandit inceptos.</p>
            <div class="inputs">
                <input type="email" class="box" placeholder="Ingrese su Correo" name="gmail">
                <input type="password" class="box" placeholder="Ingrese su contraseña" name="contrasena">
                <a href="#"></a>
                <input type="submit" class="submit" value="Ingresar">
            </div>
        </form>
        <form action="login_usuario.php" method="POST" class="form">
            <h2>Login</h2>
            <p> Quis augue felis dis libero non class est sem luctus ante, taciti integer vestibulum auctor quisque molestie vehicula arcu ad suspendisse,
                fames platea vitae dictumst lacus cras morbi pretium duis. Lobortis congue metus condimentum tristique potenti in sociosqu eget augue suspendisse,
                vestibulum cum a quam non hac leo blandit inceptos.</p>
            <div class="inputs">
                <input type="email" class="box" placeholder="Ingrese su Correo" name="gmail">
                <input type="password" class="box" placeholder="Ingrese su contraseña" name="contrasena">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <input type="submit" class="submit" value="Ingresar">
            </div>
        </form>
    </div>


</body>

</html>