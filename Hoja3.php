
<?php
/******************EJERCICIO 1****************/
echo " <b>Ejercicio 1 </b><br>";

$numero1=1;
$numero2=3;
$numero3=7;


echo $numero1>$numero2 && $numero1>$numero3 ? "El numero mas alto es: $numero1" : ($numero2>$numero1 && $numero2>$numero3 ?"El numero mayor es: $numero2":  "El numero 3 es el mayor");
    //si se cumple esta condicion          -->  sale esto                    sino --> si se cumple esta condicion        -->sale esto                 si no-->sale esto

echo "<br><br>";

/******************EJERCICIO 2****************/
echo " <b>Ejercicio 2 </b><br>";

$cadena1="Es";
$cadena2="Muy";
$cadena3="T";

// echo strlen($cadena1); muestra la longitud de una cadena

if(strlen($cadena1)>strlen($cadena2) && strlen($cadena1)>strlen($cadena3)){
    echo $cadena1;
}elseif(strlen($cadena2)>strlen($cadena1) && strlen($cadena2)>strlen($cadena3)){
    echo $cadena2;
}else{
    echo $cadena3;
}

echo "<br><br>";



/******************EJERCICIO 3****************/
echo " <b>Ejercicio 3 </b><br>";
//rand() nos sirve para generar un numero aleatorio

//echo rand() . "<br>" para mostrar un numero aleatorio;

$aleatorio=rand();
echo $aleatorio . "<br>";
if($aleatorio%2==0){
    echo "El numero es par";

}else{
    echo "El numero es impar";
}

echo "<br><br>";

//podemos indicarle un rango entre 2 numeros para que nos genere un numero aleatorio entre esos 2
//echo rand(5, 15);

/******************EJERCICIO 4****************/
echo " <b>Ejercicio 4 </b><br>";


$dia=date("D"); 

echo $dia;


switch ($dia) {
    
    case "Mon":
        echo "Es Lunes";
        break;
    case "Tues":
        echo "Es Martes";
        break;
    case "Wed":
        echo "Es Miercoles";
        break;
    case "Thurs":
        echo "Es Jueves";
        break;
    case "Fri":
        echo "Es Viernes";
        break;
    case "Sat":
        echo "Es Sabado";
        break;
    case "Sun":
        echo "Es Domingo";
        break;    
}

echo "<br><br>";


/******************EJERCICIO 5****************/
echo " <b>Ejercicio 5 </b><br>";

$a="Muy";
$b="Es";
$c="temprano";



if(strlen($a)<strlen($b) && strlen($a)<strlen($c)){
     $menor=$a;
}

echo $menor;

echo "<br><br>";

/******************EJERCICIO 6****************/
echo " <b>Ejercicio 6 </b><br>";

for ($i = 1; $i <= 99; $i++) {
    
    if($i%2!=0 && $i%5!=0){
        echo "$i <br>";

    }
}







echo "<br><br>";
?>