<?php
    //conexion a la base de datos
    include 'conexion.php';

    $gmail = $_POST['gmail'];
    $contrasena = $_POST['contrasena'];

    //encriptar la contraseña por temas de seguridad
    //la variable contrasena no es necesario que sea la misma
    /*$contrasena = hash('sha512', $contrasena);*/

    $query = "INSERT INTO usuario (gmail, contrasena)
              VALUES('$gmail', '$contrasena')";

    //Evitar que se repita el mismo correo.
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE gmail = '$gmail'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta Registrado, Intenta con otro");
            window.location = "index.php";
        </script>';

        exit(); //la funcion de este codigo (exit) es evitar que se ejecute el codigo que sigue por debajo
    }

    //mensaje despues de subir los datos, si se almaceno o no
    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "index.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>