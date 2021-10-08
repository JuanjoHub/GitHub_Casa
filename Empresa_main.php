<?php
############################################################################
################################ MAIN ######################################
############################################################################


//incluide para añadir la hoja de clases.

include("Hoja11_ejercicio2.php");

    $empleado1 = new Empleado("Juanjose", "Cogollo","Caviedes",28,"0929920C",2000, 10);
    $empleado2 = new Empleado("Juanjose", "Cogollo","Caviedes",28,"0929920C",2000, 10);
    $empleado3 = new Empleado("Juanjose", "Cogollo","Caviedes",28,"0929920C",2000, 10);
    $empleado4 = new Empleado("Juanjose", "Cogollo","Caviedes",28,"0929920C",2000, 10);
     

    echo "<b>INCREMENTO DE SUELDO</b><br>";
     $empleado1->incrementar_sueldo(20);
    echo "<br>"; 

     echo "<b>INCREMENTO DE ANTIGUEDAD</b><br>"; 
     $empleado1->incrementar_antiguedad(5);
     echo "<br>"; 


     echo "<br><b>VISUALIZANDO SUELDO</b><br>"; 
     $empleado1->visualizar_sueldo();
     echo "<br>"; 

     echo "<br><b>VISUALIZANDO ANTIGUEDAD</b><br>"; 
     $empleado1->visualizar_antiguedad();
     echo "<br>"; 

     echo "<br><b>SOBREESCRIBIENDO EL METODO VISUALIZAR</b><br>"; 
     $empleado1->visualizar();
     echo "<br>"; 
    
     echo "<br><b>METODO A PAGAR</b><br>"; 
     $empleado1->aPAGAR();
     echo "<br>"; 






?>