<?php

include 'con_db.php';

$fecha = $_POST['fecha'];
$unidad = $_POST["unidad"];
$factura = $_POST["factura"];
$reserva = $_POST["reserva"];
$tipo = $_POST["tipo"];
$destino = $_POST["destino"];
$apeynom = $_POST["apeynom"];
$importe = $_POST["importe"];


$insertar =" INSERT INTO  usuario (fecha, unidad, factura, reserva, tipo, destino, importe) VALUES
 ('$fecha','$unidad','$factura','$reserva','$tipo','$destino','$importe')";

$verificar_reserva = mysqli_query($conexion, "SELECT * from usuario where reserva  = '$reserva'");
if (mysqli_num_rows($verificar_reserva)> 0 ) {
    echo '<script>  alert ("La reserva ya se encuentra  ingresada"); 
    window.history.go(-1);
          </script>';
    exit;
}

 $resultado = mysqli_query($conexion, $insertar);

 if (!$resultado) {
 echo 'Error al Ingresar';}
 else{
     echo '<script>  alert ("Se ingreso correctamente"); 
     window.history.go(-1);
           </script>';
 }


mysqli_close($conexion);








?>

