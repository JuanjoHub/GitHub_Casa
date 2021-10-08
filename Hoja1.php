<?php

/******************EJERCICIO1****************/
echo "<b>Ejercicio 1 </b> <br>";
$a=7;

$b=&$a;

$c=&$b;

echo $a,$b,$c;

$c=8;

echo $a,$b,$c;

echo "<br><br><br>";


/******************EJERCICIO6****************/
echo "<b>Ejercicio 6 </b><br>";

$radio=2.5;
const PI=3.1415;
$resultado= PI*($radio*$radio);

echo "El resultado es: $resultado";
echo "<br><br><br>";


/******************EJERCICIO8****************/
echo " <b>Ejercicio 8 </b><br>";

echo 'Aqui se puede añadir comillas "dobles" ';
echo "<br>";
echo  "Aqui se puede añadir comillas 'simples ' ";
echo "<br><br><br>";

/******************EJERCICIO9****************/
echo " <b>Ejercicio 9 </b><br>";

$variable=NULL;

if ($variable) 
echo "Existe";

else 
echo "No existe";
echo "<br><br><br>";

/******************EJERCICIO10****************/
echo " <b>Ejercicio 10 </b><br>";

$a = 1.234; 
$b = 1.2e3; //el 'e' indica elevado a
$c = 7E-10;

echo "$a <br>";
var_dump($a);
echo "<br>";

$a=true;
var_dump($a);
echo "<br>";

/*
$a='hola';
$$a='mundo';

echo "$a{$$a} <br><br>";
*/
echo "<br>";
echo "<b>Ejemplo de '$' </b><br>";

$Bar = "a";
  $Foo = "Bar";
  $World = "Foo";
  $Hello = "World";
  $a = "Hello";

  $a; //Returns Hello
  $$a; //Returns World
  $$$a; //Returns Foo
  $$$$a; //Returns Bar
  $$$$$a; //Returns a

  echo "$a <br>";
  echo "{$$a}<br>";
  echo "{$$$a}<br>";
  echo "{$$$$a}<br>";
  echo "{$$$$$a}<br>";



?>