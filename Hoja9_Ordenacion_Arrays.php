<?php
/*********************************************/
/******************EJERCICIO 1****************/
/*********************************************/
echo " <b>Ejercicio 1 </b><br>";

/*
a) Ordenarlo por los valores de mayor a menor sin mantener las asociaciones clave-valor

b) Igual pero manteniendo las asociaciones

c) Ordenarlo por las claves de menor a mayor

d) Mezcla el array aleatoriamente

e) Obtén un array con las claves de dos valores seleccionados aleatoriamente.

f) Ordénalo por los valores de mayor a menor sin diferenciar mayúsculas y minúsculas.
*/


echo " <b> A) Ordenacio de mayor a menor con 'arsort' manteniendo las asociaciones de las claves: </b><br>";

$ciudades = array(

    'k3' => 'JUAN',
    'k5' => 'Álvaro',
    'k0' => 'Maite',
    'k2' => 'ÁLVARO',
    'k1' => 'Juan',
    'k4' => 'Martina');

    

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


echo "<br><br>";






?>