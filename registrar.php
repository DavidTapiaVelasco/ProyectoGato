<?php
 include("conx_db.php");
 /*if($conex){
    echo "CORRECTO";
 }else {
     echo "ERROR";
 }*/

 if(isset($_POST['ingresar'])){
    if(strlen($_POST['usuario']) > 1 && strlen($_POST['contraseña']) > 1){
        $usuario=trim($_POST['usuario']);
        $contraseña=trim($_POST['contraseña']);
        $fechareg=date("d/m/y");
        $consulta = "INSERT INTO datos(id, usuario, contraseña, fecha_reg) VALUES ('null', '$usuario', '$contraseña', '$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <h3 class="ok">Datos correctos</h3>
            <?php
        }else {
            ?>
            <h3 class="bad">Datos incorrectos</h3>
            <?php
        }
    }else {
        ?>
            <h3 class="bad">Ingrese sus datos por favor</h3>
        <?php
    }
 }
?>