<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="post" autocomplete="off">
    <h2>Formulario de pruebas</h2>
    
    <!-- Contenedor del campo "nombre" -->
    <div class="input-group">
        <div class="input-container">
            <input type="text" name="name" placeholder="nombre">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    
    <!-- Contenedor del campo "contraseña" -->
    <div class="input-group">
        <div class="input-container">
            <input type="password" name="password" placeholder="contraseña">
            <i class="fa-solid fa-lock"></i>
        </div>
    </div>
    
    <!-- Contenedor del campo "correo" -->
    <div class="input-group">
        <div class="input-container">
            <input type="email" name="email" placeholder="correo">
            <i class="fa-solid fa-envelope"></i>
        </div>
    </div>
    
    <!-- Contenedor del campo "teléfono" -->
    <div class="input-group">
        <div class="input-container">
            <input type="tel" name="phone" placeholder="telefono">
            <i class="fa-solid fa-phone"></i>
        </div>
    </div>
    
    <a href="#">Terminos y condiciones</a>
    <input type="submit" name="send" class="btn" value="enviar">
   </form>
   
   <?php 
        include("send.php");
   ?>
</body>
</html>
