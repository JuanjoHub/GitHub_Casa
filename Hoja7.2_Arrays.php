<?php

/******************EJERCICIO 1****************/
echo " <b> Ejercicio 1 </b><br>";

$alumno=array(

    "nombre" => "José",
    
    "apellidos" => "Martínez Roca",
    
    "telefono" => "96 361 66 54",
    
    "direccion" => "C/ Arco del triunfo 13",
    
    "dni" => "22 111 055",
    
    "num_matricula" => "6666",
    
    "facultad" => "Facultad Informática",
    
    "curso" => "5"
    
    );
    $array_keys;
    $array_valor;
    $i=0;

    foreach ($alumno as $key => $value) {
        
        $array_keys[$i]=$key;
        $array_valor[$i]=$value;

        $i++;
    }





  
echo "<br>";    
echo "************************************************ <br>";
print_r($array_keys);
    
echo "<br>";    
echo "************************************************ <br>";       
   
print_r($array_valor);
echo "<br>";

?>



<table border="1" width="60%" height="0%" cellspading="0">   
<?php


 /******************EJERCICIO 2****************/

echo " <br><b>Ejercicio 2 </b><br>";
   
/*
2. Crea un array de dos dimensiones de manera que en una dimensión contenga el tipo de colores (fuerte o suave) 
y en la otra 3 colores de cada tipo. Visualiza una tabla como la siguiente recorriendo el array:
*/


$colores=array("colores fuertes"=>array(" rojo:FF0000",
                                        " verde:00FF00",
                                        " azul:0000FF"),
                "colores suaves"=>array(" rosa:FE9ABC", 
                                        " amarillo:FDF189", 
                                        " malva:BC8F8F"),


);

foreach ($colores as $clave=>$fila) {
    echo "<td> $clave";
    foreach ($fila as $celda) {
        
       echo " <td bgcolor=" . strrchr($celda, ':') ."> $celda</td>";
                        echo strrchr($celda, ':');
                    }
                    echo "</tr>";
                }            



?>
</table>


<?php

echo "<br>";


 /******************EJERCICIO 3****************/

echo " <br><b>Ejercicio 3 </b><br>";

/*
Visualiza los siguientes arrays mediante el correspondiente código php:
*/

echo "<br><b> A) </b><br>";

$miFecha = array(   array(  array("13 de enero de 2015", "11 de febrero de 2018"),
                    array("13 de enero de 2020", "11 de febrero de 2015"),
                    ),

                    array(  array("3 de agosto de 2017", "1 de octubre de 2016"),
                    array("3 de agosto de 2013", "1 de octubre de 2019"),
                    ),

                    array(  array("10 de junio de 2020", "11 de marzo de 2019"),
                    ),

                    array(   array("22 de marzo de 2020", "28 de mayo de 2019"),
                    array("22 de marzo de 2019", "28 de mayo de 2018"),
                    array("22 de marzo de 2018", "28 de mayo de 2017"),
                    array("22 de marzo de 2017", "28 de mayo de 2016"),
                    )
    
    );
    
    
    foreach ($miFecha as $variable1) {
        echo "<br>";
        foreach ($variable1 as $variable2) {
            foreach ($variable2 as $variable3){
                echo "$variable3 <br>";
            }
        }
    }


//print_r($miFecha);

echo "<br><b> B) </b><br>";

$equipo_futbol = array
 					(
 					array("Rooney","Chicharito","Gigs"),
 					array("Suarez"),
 					array("Torres","Terry","Etoo")
 					);

    foreach ($equipo_futbol as $variable1) {
        echo "<br>";
        foreach ($variable1 as $variable2) {
           echo "$variable2 <br>";
                            
                        }
                    }                 

echo "<br><b> C) </b><br>";

$datos = array(
    array(array(0, 0, 0),
          array(0, 0, 1),
          array(0, 0, 2) 
          ),
    array(array(0, 1, 0),
          array(0, 1, 1),
          array(0, 1, 2) 
          ),
    array(array(0, 2, 0),
          array(0, 2, 1),
          array(0, 2, 2) 
          )
    );


    foreach ($datos as $variable1) {
        echo "<br>";
        foreach ($variable1 as $variable2) {
            echo "segunda dimension <br>";
            foreach ($variable2 as $variable3){
                echo "tercera dimension $variable3 <br>";
            }
           
        }
    }                



?>