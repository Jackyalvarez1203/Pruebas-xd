<?php 
include("conexion.php"); 

if (isset($_POST['send'])) {                     

    // Verificar que todos los campos estén completos
    if (strlen($_POST['name']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1) {

        // Limpiar los valores de los campos
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $fecha = date("d/m/y");

        // Consulta SQL para insertar los datos
        $consulta = "INSERT INTO datos(nombre, contraseña, email, telefono, fecha)
                     VALUES ('$name', '$password', '$email', '$phone', '$fecha')";

        // Ejecutar la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Verificar si la consulta fue exitosa
        if ($resultado) {
            // Mostrar mensaje de éxito
            echo '<h3 class="success">Tu registro se ha completado con éxito.</h3>';
        } else {
            // Mostrar mensaje de error
            echo '<h3 class="error">Ocurrió un error al registrar los datos: ' . mysqli_error($conex) . '</h3>';
        }
    } else {
        echo '<h3 class="error">Por favor, complete todos los campos.</h3>';
    }
}
?>
 
 