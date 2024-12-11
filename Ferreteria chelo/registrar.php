<?php 
    include("con_db.php"); 

    if (isset($_POST['Registrarse'])) {
        if (strlen($_POST['nombre_completo']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1) {
            
            $nombre_completo = trim($_POST['nombre_completo']);
            $email = trim($_POST['email']);
            $contrasena = trim($_POST['contrasena']);
            $fecha_reg = date("Y-m-d"); 

            $consulta = "INSERT INTO datos (nombre_completo, email, contrasena, fecha_reg) 
                         VALUES ('$nombre_completo', '$email', '$contrasena', '$fecha_reg')";

            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                echo "<h3 class='ok'>¡Te has registrado correctamente!</h3>";
                header("Location: Productos.html");
            } else {
                echo "<h3 class='bad'>¡Ups! Ocurrió un error al registrar tus datos.</h3>";
            }
        } else {
            echo "<h3 class='bad'>¡Por favor completa todos los campos!</h3>";
        }
    }
?>