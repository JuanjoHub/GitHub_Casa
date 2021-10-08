<?php
############################################################################
################################ MAIN ######################################
############################################################################


//incluide para añadir la hoja de clases.

include("Hoja11_ejercicio2.php");

    $empleado1 = new Empleado("Juanjose", "Cogollo","Caviedes",28,"0929920C",2000, 10);
    $empleado2 = new Empleado("Raul", "Garcia","De la fuente",30,"0929920A",3000, 5);
    $empleado3 = new Empleado("Eduardo", "Fachal","Fernandez",29,"0929920B",2, 50);
    $empleado4 = new Empleado("Igancio", "Cogollo","Caviedes",10,"0929920R",1500, 2);
     

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


    //instanciamos el array de objetos
     $var_Empresa=new Empresa();
    //añadimos los empleados
     $var_Empresa->add_empleado($empleado1);
     $var_Empresa->add_empleado($empleado2);
     $var_Empresa->add_empleado($empleado3);
     $var_Empresa->add_empleado($empleado4);

    //visualizamos modo dios
    echo "<pre>";
      print_r($var_Empresa);
    echo "</pre>";
    
    $sueldoTotal =  $var_Empresa->salario_total_empleados();
    echo "El sueldo total de los empleados es: $sueldoTotal €";

    
?>

