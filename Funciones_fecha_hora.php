<?php
/**********************************************/
/******************FUNCION TIME()****************/
/**********************************************/
echo " <b>FUNCION TIME() </b><br>";


$timestamp=time(); 
$fecha=date("d-m-Y H:i:S" , $timestamp);
echo "La fecha y la hora actual es: <br>";
echo $fecha;



echo "<br><br>";
/**********************************************/
/******************FUNCION GET_DATE****************/
/**********************************************/
echo " <b>FUNCION GET_DATE </b><br>";

$hoy = getdate();
//print_r($hoy);


foreach ($hoy as $key => $value) {
  echo "$key => $value <br>";
}


echo "<br><br>";
/**********************************************/
/******************FUNCION STRTOTIME****************/
/**********************************************/
echo " <b>FUNCION STRTOTIME </b><br>";

echo date("d-m-Y H:i:s",strtotime("now")), "<BR>";
echo date("d-m-Y H:i:s",strtotime("10 September 2000")), "<BR>";
echo date("d-m-Y H:i:s",strtotime("+1 day")), "<BR>";
echo date("d-m-Y H:i:s",strtotime("+1 week")), "<BR>";
echo date("d-m-Y H:i:s",strtotime("+1 week 2 days 4 hours 2 seconds")), "<BR>";
echo date("d-m-Y H:i:s",strtotime("next Thursday")), "<BR>";
echo date("d-m-Y H:i:s",strtotime("last Monday")), "<BR>";



echo "<br><br>";
/**********************************************/
/******************FUNCION MKTIME****************/
/**********************************************/
echo " <b>FUNCION MKTIME </b><br>";

//construimos la marca del tiempo del 15-04-04 23:15
$timestamp =mktime(23,15,0,4,15, 2004);

//mostramos la marca de tiempo conviertiendola de nuevo
echo date("d-m-Y H:i:s",$timestamp);

echo "<br><br>";
/**********************************************/
/******************FUNCION CHECKDATE****************/
/**********************************************/
echo " <b>FUNCION CHECKDATE </b><br>";

//Para comprobar que una fecha existe.
var_dump(checkdate(12, 31, 2000));
var_dump(checkdate(2, 29, 2020));





?>