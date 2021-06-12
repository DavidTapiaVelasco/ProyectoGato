<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styleLogin.css">
  <title>Tabla</title>
</head>
<body>
  <form class="form-Login" method="POST">
    <input class="controles"
            type="text"
            name="NIT"
            placeholder="Ingrese su Carnet o NIT">
    <input class="controles"
            type="text" 
            name="NOMBRE" 
            placeholder="Ingrese su nombre">
    <input class="controles"
            type="text"
            name="COMPRA1"
            placeholder="Ingrese compra 1">
    <input class="controles"
            type="text"
            name="COMPRA2"
            placeholder="Ingrese compra 2">
    <input class="controles"
            type="text"
            name="COMPRA3"
            placeholder="Ingrese compra 3">
    <input class="controles"
            type="value"
            name="MONTO"
            placeholder="Ingrese precio de venta">
    <input type="button" value="REGISTRAR" class="botones" name="REGISTRAR">
  </form>
  <?php
    include("registrartabla.php");
  ?>
</body>
</html>
