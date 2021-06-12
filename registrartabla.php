<?php
 include("conx_db.php");
/*
 if($conex){
    echo "CORRECTO";
 }else {
     echo "ERROR";
 }
*/

 if(isset($_POST['REGISTRAR'])){
   
        $ci=$_POST['NIT'];
        $nombre=trim($_POST['NOMBRE']);
        $C1=trim($_POST['COMPRA1']);
        $C2=trim($_POST['COMPRA2']);
        $C3=trim($_POST['COMPRA3']);
        $precio=$_POST['MONTO'];
        $fechareg=date("d/m/y");
        $consulta="INSERT INTO registros(ID, CARNET_NIT, NOMBRE, COMPRA1, COMPRA2, COMPRA3, PRECIO, FECHA_REG) VALUES ('null','$ci','$nombre','$C1','$C2','$C3','$precio','$fechareg')";
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
    
    
    }
    else {
        ?>
            <h3>Ingrese sus datos por favor</h3>
        <?php
 }

?>