<?php
/*********************************************/
/******************EJERCICIO 2****************/
/*********************************************/
echo " <b>Ejercicio 2 </b><br>";

$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[]='Cáceres';
$ciudades[]='ALICANTE';
$ciudades[]='Almería';
$ciudades[]='Zaragoza';

echo " <b> A) Ordenacio de mayor a menor con 'arsort' manteniendo las asociaciones de las claves: </b><br>";

arsort($ciudades);
        foreach ($ciudades as $key => $val) {
        echo "$key = $val\n";
}

echo "<br><br>";
echo " <b> B) Ordenacio de mayor a menos pero manteniendo las asociaciones: </b><br>";

rsort($ciudades);

        foreach ($ciudades as $key => $val) {
        echo "$key = $val\n";

}

echo "<br><br>";
echo " <b> C) Ordenarlo por las claves de menor a mayor </b><br>";

ksort($ciudades);
print_r($ciudades);

echo "<br><br>";
echo " <b> D) Mezcla el array aleatoriamente </b><br>";


shuffle($ciudades);
print_r($ciudades);


echo "<br><br>";
echo " <b> E) Obtener un array con las claves de dos valores seleccionados aleatoriamente. </b><br>";

print_r(array_rand($ciudades,2)); //el '2' indica el numero de claves aleatorias que quieres mostrar



echo "<br><br>";
echo " <b> E) Ordenar los valores de mayor a menor sin diferenciar mayúsculas y minúsculas. </b><br>";

natcasesort($ciudades);
foreach ($ciudades as $key => $val) {
    echo "$key = $val\n";

}
echo "<br><br><br>";
/*********************************************/
/******************EJERCICIO 3****************/
/*********************************************/
echo " <b>Ejercicio 3 </b><br>";

$array_imagenes=array("imagen12.png", "imagen10.png", "imagen2.png", "img1.png");

asort($array_imagenes);
echo "Ordenación estándar: <br>";
print_r($array_imagenes);

natsort($array_imagenes);
echo "<br>Ordenación de orden natural:<br>";
print_r($array_imagenes);




echo "<br><br><br>";
/*********************************************/
/******************EJERCICIO 4****************/
/*********************************************/
echo " <b>Ejercicio 4 </b><br>";

$negativos = array('-5','3','-2','0','-1000','9','1');

$ceros = array('09', '8', '10', '009', '011', '0');

natsort($negativos);
echo "<br>Ordenación de orden natural del array NEGATIVOS:<br>";
print_r($negativos);

natsort($ceros);//Con el natsort Las cadenas numéricas rellenadas con ceros (p.ej., '00005') ahora ignoran el relleno de 0.
echo "<br>Ordenación de orden natural del array CEROS:<br>";
print_r($ceros);



echo "<br><br><br>";
/*********************************************/
/******************EJERCICIO 5****************/
/*********************************************/
echo " <b>Ejercicio 5 </b><br>";


$array_imagenes2=array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

natsort($array_imagenes2);
echo "<br>Ordenación SENSIBLE a mayusculas y minusculas:<br>";
print_r($array_imagenes2);

natcasesort($array_imagenes2);
echo "<br>Ordenación INSENSIBLE a mayusculas y minusculas:<br>";
print_r($array_imagenes2);



echo "<br><br><br>";
/*********************************************/
/******************EJERCICIO 6****************/
/*********************************************/
echo " <b>Ejercicio 6 </b><br>";


$array1 = array(100, 99, 50, 343);

$array2 = array(100, 13, 22, 4);



$array_prueba = array(
        array(100, 99, 50, 343), 
        array(100, 13, 22, 4)
    );

//SORT_ASC  -->Ascendente
//SORT_DESC -->Descendente
echo "<br>ARRAY DE PRUEBA BIDIMENSIONAL<br>";
array_multisort($array_prueba[0],$array_prueba[1],SORT_DESC);
var_dump($array_prueba);


echo "<br><br><br>";
/*********************************************/
/******************EJERCICIO 7****************/
/*********************************************/
echo " <b>Ejercicio 7 </b><br>";

$array_multi = array(
        array("10", 11, 100, 100, "a"),
        array(   1,  2, "2",   3,   1)
       );

       array_multisort($array_multi[0], SORT_ASC, SORT_STRING,
       $array_multi[1], SORT_NUMERIC, SORT_DESC);
       print_r($array_multi);   

 
 echo "<br><br><br>";
 echo "<br><br><br>";
 /**********************************************/
 /******************EJERCICIO 8****************/
 /**********************************************/
 echo " <b>Ejercicio 8 </b><br>";
 
 $supermercado = array(
         "electrodomesticos" => array("Televisor", "Heladera"), 
         "alimentos" => array("Carne", "Leche")
 );
 
 
 array_multisort($supermercado["electrodomesticos"], SORT_ASC,
                 $supermercado["alimentos"],SORT_DESC);
  var_dump($supermercado);
 echo "<br>";
 foreach ($supermercado as $variable1) {
    
         foreach ($variable1 as $variable2) {
 
                 echo "$variable2 <br>";
         }
 
        
 }
 
 /**********************************************/
 /******************EJERCICIO 9****************/
 /**********************************************/
 
 
 
 /*
 Ordénalo por volumen descendéntemente y por edición ascendentemente. 
 Tener en cuenta que array_multisort requiere un array de columnas y tenemos un array de filas.
 */
 echo " <b>Ejercicio 9 </b><br>";
 
 $datos[] = array('volumen' => 67, 'edición' => 2);
 $datos[] = array('volumen' => 86, 'edición' => 1);
 $datos[] = array('volumen' => 85, 'edición' => 6);
 $datos[] = array('volumen' => 98, 'edición' => 2);
 $datos[] = array('volumen' => 86, 'edición' => 6);
 $datos[] = array('volumen' => 67, 'edición' => 7);
 
 
 // Obtener una lista de columnas
         foreach ($datos as $clave => $fila) {
         $volumen[$clave] = $fila['volumen'];
         $edición[$clave] = $fila['edición'];
     }
     
 // a partir de PHP 5.5.0 puede usar array_column() en lugar del código anterior
 
     $volume  = array_column($datos, 'volumen');
     $edition = array_column($datos, 'edition');
     
 // Ordenar los datos con volumen descendiente, edición ascendiente
 // Agregar $datos como el último parámetro, para ordenar por la clave común
 
     array_multisort($volumen, SORT_DESC, $edición, SORT_ASC, $datos);
     print_r($datos);
 
    // print_r($datos);
 
 
       
    echo "<br><br><br>";
    /**********************************************/
    /******************EJERCICIO 10****************/
    /**********************************************/
    echo " <b>Ejercicio 10 </b><br>";
 
    /*
 a) Utilizando una función definida por ti que sitúe primero las cadenas de caracteres más cortas, 
 sin mantener las asociaciones clave valor
 
 b) Igual que el anterior pero manteniendo las asociaciones clave-valor
 
 c) Utilizando una función que ordene el array 
 por las claves situando primero las que comienzan con un valor par
    */
 
    $array_ej10 = array(
 
        '3k' => 'JUAN',
        '4k' => 'Álvaro',
        '0k' => 'Maite',
        '5k' => 'ÁLVARO',
        '1k' => 'Juan',
        '2k' => 'Martina');
 
        function cmp($a, $b){
 
         $string1=(strlen($a));
         $string2=(strlen($b));
                 if ($string1 == $string2) return 0;
                 return ($string1 > $string2) ? 1 : -1; 
        
        }
        
        usort($array_ej10, "cmp");
        print_r($array_ej10);




?>