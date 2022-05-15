<?php

include("con_db.php");
$usuarios= "select * from factura";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tabla-datos-grid</title>
</head>

<header>
        <div class="perfil">      
            <img  class="avion1"     src="avion.png" width="50px"   height="50px" alt="TE FALTA  el avion">  </div>
        
        
        <nav>
           
           
            <ul>
                

                <li><a href="http://localhost:82/aereo52/">Inicio</a></li>
                <li><a href="http://localhost:82/Tabla-datos-grid/">Editar</a></li>
                <li><a href="#">Directivas</a></li>
                <li><a href="#">Preguntas </a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
<body>
    <div class="container-table">
        <div class="table__title">Datos de Usuario</div>
        <div class="table__header">Fecha</div>
        <div class="table__header">Unidad</div>
        <div class="table__header">Factura</div>
        <div class="table__header">Reserva</div>
        <div class="table__header">Tipo</div>
        <div class="table__header">Destino</div>
        <div class="table__header">importe</div>
       


        
        </div>
        
        

      










    
</body>
</html>