<?php

session_start();

include'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena ='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location:  http://localhost/peza/html/");
    exit;
}else{
    echo '
    <script>
        alert("El ususario no existe, veriifique los datos introducidos");
        window.location = "../indexio.php";
    </script>
    ';
    exit;
}


?>