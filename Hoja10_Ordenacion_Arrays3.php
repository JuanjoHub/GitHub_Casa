<?php


/**********************************************/
/******************EJERCICIO 1****************/
/**********************************************/
echo " <b>Ejercicio 1 </b><br>";


$array = array(

    'k3' => 'Juan',
    'k5' => 'Álvaro',
    'k0' => 'Maite',
    'k2' => 'Álvaro',
    'k1' => 'Juan',
    'k4' => 'Martina');

    print_r(array_count_values($array));


    echo "<br><br><br>";
/**********************************************/
/******************EJERCICIO 2****************/
/**********************************************/
echo " <b>Ejercicio 2 </b><br>";


$ciudades[5]='Madrid';
$ciudades[7]='Oviedo';
$ciudades[8]='Cáceres';
$ciudades[9]='ALICANTE';
$ciudades[10]='Almería';
$ciudades[11]='Cáceres';
$ciudades[12]='Zaragoza';
$ciudades[13]='Zaragoza';


print_r(array_count_values($ciudades));


echo "<br><br><br>";
/**********************************************/
/******************EJERCICIO 3****************/
/**********************************************/
echo " <b>Ejercicio 3 </b><br>";


$ejemploPila=array();


for ($i=0; $i <current($ciudades) ; $i++) { 
       
    $ejemploPila[$i]=array_pop($ciudades);

    }
echo "PILA CON FOR <br>";
print_r($ejemploPila);

echo "<br>";




echo "<br><br><br>";
/**********************************************/
/******************EJERCICIO 4****************/
/**********************************************/
echo " <b>Ejercicio 4 </b><br>";


//a) Preservando asociaciones clave-valor.
	$array1=array("imagen12.png", "imagen10.png", "imagen2.png", "img1.png");  
    $reversed = array_reverse($array1);
    print_r($array1);
    echo "<br><br>";
//b) Sin preservar asociaciones clave-valor.
    $array2=array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');  
    $preserved = array_reverse($array2, true);
    print_r($array2);
    //Si se establece en true las claves numéricas se conservarán. 
    //Las claves no numéricas no se ven afectadas por este ajuste y se conservarán siempre.


    echo "<br><br><br>";
/**********************************************/
/******************EJERCICIO 5****************/
/**********************************************/
echo " <b>Ejercicio 5 </b><br>";

//a) los múltiplos de 5 desde 20 a 100.
//b) los múltiplos de 3 de 99 a 3

$pila = array();
$pila2=array();
echo "<br> Multiplos de 5 <br>";
    for ($i=20; $i <=100 ; $i++) { 
       
        if($i%5==0){
            array_push($pila,$i);

        }
    }

    foreach ($pila as $multiplos5) {
        echo "$multiplos5 <br>";
    }

echo "<br> Multiplos de 3 <br>";
    for ($i=20; $i <=100 ; $i++) { 
       
        if($i%3==0){
            array_push($pila2,$i);

        }
    }
    foreach ($pila2 as $multiplos3) {
        echo "$multiplos3 <br>";
    }



    echo "<br><br><br>";
    /**********************************************/
    /******************EJERCICIO 6****************/
    /**********************************************/
    echo " <b>Ejercicio 6 </b><br>";


    //a)	Realizando comparación estricta
    //b)	No realizando comparación estricta
    
    
    $array_numeros = array (100, 99, 50, 343, "100", 13, 22, 4, 6, 50, 99, 100, 343, "99");

    print_r(array_count_values($array_numeros));

    echo "<br>";
    echo "<br>No realizando una comparacion estricta<br>";
    if (in_array("100", $array_numeros)) {
        echo "Existe 100 Como String <br>";
    }
    
    if (in_array(100, $array_numeros)) {
        echo "Existe 100 Como Entero<br>";
    }

    echo "<br>Realizando una comparacion estricta<br>";

    $contador=0;
    $array_prueba=array();
    $auxiliar='100';
    for ($i=0; $i <count($array_numeros) ; $i++) { 
        
       if (in_array($auxiliar, $array_numeros, true)) {
            array_push($array_prueba,$array_numeros[$i]);
       }
        
    }
echo "array de prueba <br>";
print_r($array_prueba);


echo "El numero de veces que se ha encontrado el 100 es : $contador <br>";


    //Añadimos el true para que la comprobacion sea estricta
    if (in_array('100', $array_numeros, true)) { 
        echo "Se encontró '100' con comprobación estricta \n";
    }
    

    

    
    echo "<br><br><br>";
    /**********************************************/
    /******************EJERCICIO 8****************/
    /**********************************************/
    echo " <b>Ejercicio 8 </b><br>";

    /*
    Utiliza la función compact() para obtener un nuevo array en el cual los índices sean los nombres
     de las variables (desde ‘0k’ hasta ‘7k’) y el contenido los correspondientes valores 
     de las variables.
    */

    $array_8 = array(

        '3k' => 'JUAN',
        '4k' => 'Álvaro',
        '0k' => 'Maite',
        '5k' => 'ÁLVARO',
        '1k' => 'Juan',
        '2k' => 'Martina');

   
    //1º Ordenamos el array
    ksort($array_8);  
    echo "Imprimiendo el primer array ordenado <br>";
    print_r($array_8);
    
    //Declaramos las variables.
    $p6k = "Eva";
    $p7k = "Pablo";
    
    
    $Array_nombres = array("p6k", "p7k");
    //Implementamos el compact 
    $resultado = compact($Array_nombres);
    echo "Imprimiendo el array de variables <br>";
    print_r($resultado);
 
    echo "<br>";
    //Fusionamos los 2 arrays 
    echo "<br>Imprimiendo el array Merge <br>";
    $resultado_final=array_merge($array_8,$resultado);
    print_r($resultado_final);
     
    echo "<br>";
    
    //Imprimimos el resultado final
    echo "<br>Imprimiendo el array final: <br>";
    print_r($resultado_final);

   echo "<br>";
   
   echo "<br><br><br>";
   /**********************************************/
   /******************EJERCICIO 9****************/
   /**********************************************/
   echo " <b>Ejercicio 9 </b><br>";

   $pelis = array(
  
    'Mi vecino Totoro, Hayao Miyazak' => 6,
    'Memento, Christopher Nolan' => 9.5,
    'El viaje de Chihiro, Hayao Miyazak' => 8.5,
    'El paciente inglés, Anthony Minghella' => 8,
    'El cazador de Sueños, Lawrence Kasdan' => 7,
    'Cold Mountain, Anthony Minghella' => 9.5,
    'La princesa Mononoke, Hayao Miyazak' => 10,
    'Star Wars: El ataque de los clones, George Lucas' => 7.7
    );



  

function aumento(&$array_auxiliar){
    
    
        $i=0;
        foreach ($array_auxiliar as $valor) {
           
        if($valor>=0 & $valor<=9){
        $array_auxiliar[$i]=$valor+1;
      
        }else{
            $array_auxiliar[$i]=10;
        }
       $i++;
        
    }
    
    
}


function dameDatos($elemento2, $clave){

    echo "Clave : $clave. Nota: $elemento2<br />\n";

}

aumento($pelis);
    
    array_walk($pelis, 'dameDatos');
   

    echo "<br><br>";


  



?>