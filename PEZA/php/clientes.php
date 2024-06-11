<?php
include 'conexion_be.php';

$person_name = $_POST['nombre_persona'];
$last_name = $_POST['apellido_persona'];
$email_person = $_POST['correo_persona'];
$phone_number = $_POST['Telefono_persona'];
$company = $_POST['empresa_persona'];

$query_clientes = "INSERT INTO clientes(Name, Last_Name, Email_Adress, Phone_Number, Company_Name) 
            VALUES('$person_name', '$last_name', '$email_person', '$phone_number', '$company')";
    
$ejecutar_query = mysqli_query($conexion, $query_clientes);

if($ejecutar_query) {
    echo '<script>alert("Cliente guardado exitosamente"); window.location = "http://localhost/PEZA/html/clientes.html";</script>';
} else {
    echo '<script>alert("Intentelo de nuevo, cliente no guardado"); window.location = "http://localhost/PEZA/html/clientes.html";</script>';
}

mysqli_close($conexion);
?>
