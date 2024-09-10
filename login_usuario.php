<?php

    include 'conexion.php';

    $gmail = $_POST ['gmail'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE gmail = '$gmail'
     and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0) {
        header("location: bienvenida.php");
        exit;
    }else{
        echo '
        <script>
            alert("El usuario no existe");
            window.location = "index.php";
        </script>
        ';
        exit;
    }
?>