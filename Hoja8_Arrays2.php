<?php

/******************EJERCICIO 1****************/
echo " <b>Ejercicio 1 </b><br>";

$array_codigos = array(
    'k0' => 'Juanto',
    'k1' => 'Álvaro',
    'k2' => 'Maite',
    'k3' => 'Álvaro',
    'k4' => 'Juan',
    'k5' => 'Martina');


    //1º forma facil con sentido
    
    foreach ($array_codigos as $codigo => $nombre) {
     
      if($nombre=='Álvaro'){
        echo "$codigo <br>";
        
      }

    }

    echo "<br><br><br>";
   

   
    reset($array_codigos);

    while (current($array_codigos) !=null) {
      
      if(current($array_codigos)=='Álvaro'){
        echo key($array_codigos) .  "<br>";
      }
      next($array_codigos);
    }

    echo reset($array_codigos);
    echo current($array_codigos);


echo "<br><br>";
/******************EJERCICIO 2****************/
echo " <b>Ejercicio 2 </b><br>";

print_r(array_keys($array_codigos,'Álvaro'));

echo "<br><br>";
/******************EJERCICIO 3****************/
echo " <b>Ejercicio 3 </b><br>";

$supermercado = array(
                        "Electrodomesticos" => array("Televisor",  "Heladera"), 
                        "alimentos" => array("Carne", "Leche", "Verduras")
                    );

                    print_r(array_keys($supermercado));


echo "<br><br>";
/******************EJERCICIO 4****************/
echo " <b>Ejercicio 4 </b><br>";

$alumno=array(
                "nombre" => "José",
                "apellidos" => "Martínez Roca",
                "telefono" => "96 361 66 54",
                "direccion" => "C/ Arco del triunfo 13",
                "dni" => "22 111 055",
                "num_matricula" => null,
                "facultad" => "Facultad Informática",
                "curso" => "5" 
                );
                //Recorremos el array al reves.
                end($alumno);
                while (key($alumno)!=null) {
                  
                  echo current($alumno) . "<br>";
                  prev($alumno);
                }
                //Recorremos el array normal

                echo "<br>";
                reset($alumno); //Reseteamos para que apunte al principio del array

                while (key($alumno)!=null) {
                  
                  echo key($alumno) . "<br>";
                  next($alumno);
                }





                
 echo "<br><br>";
/******************EJERCICIO 5****************/
echo " <b>Ejercicio 5 </b><br>";  

$ciudades[5]='Madrid';

$ciudades[7]='Oviedo';

$ciudades[8]='Cáceres';

$ciudades[9]='Alicante';


$i=0;



//echo current($ciudades);

                
                 //Recorremos el array al reves.
                
                 end($ciudades);
                while (key($ciudades)!=null) {
                  
                  echo current($ciudades) . "<br>";
                  prev($ciudades);
                } 
              
                echo "<br>";
                reset($alumno); //Reseteamos para que apunte al principio del array


                //Recorremos el array normal 
                while (current($ciudades)!=null) {
                  
                  echo current($ciudades) . "<br>";
                  next($ciudades);
                }


?>
