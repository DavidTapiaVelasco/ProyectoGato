<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styleLogin.css">
  <title>Login</title>
</head>
<body>
  <form class="form-Login" method="POST">
    <input class="controles" 
            type="text" 
            name="usuario" 
            placeholder="Ingrese su usuario"><br>
    <input class="controles" 
            type="password" 
            name="contraseña"
            placeholder="Ingrese su contraseña"><br>
    <input type="button" value="INGRESAR" class="botones" name="ingresar" onclick="location.href='Tabla.php' ">
  </form>
  <?php
    include("registrar.php");
  ?>
</body>
</html>