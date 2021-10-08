
<?php

$cad="defjvb/n";
$cad1="    fp.informatica.iessanjuandelacruz@educa.madrid.org   ";
$cad2= "educa.madrid.org";
$cad3="defghijk/n";
$cad4="defghi";
$cad5= 'path=["\usr\$usuario"]|\usr';
$cad6= "C/  Claveles  23,20D,28033,Madrid";
$cad7=" juan  rodríguez Hernández";
$long=15;
$car1='.';
$car2='*';



echo "1 <br>"; 
echo addslashes($cad5) . "<br>"; 
//addslashes Devuelve un string con barras invertidas delante de los caracteres que necesitan ser escapados. 
//Estos caracteres son la comilla simple ('), comilla doble ("), barra invertida (\) y NUL (el byte null).
echo "2 <br>"; 
echo quotemeta($cad3). "<br>"; 
//quotemeta Devuelve una versión de str con una barra invertida (\) antes de cada caracter que sea uno de los siguientes: . \ + * ? [ ^ ] ( $ )
echo "3 <br>"; 
echo trim($cad1). "<br>";
//Esta función devuelve una cadena con los espacios en blanco eliminados del inicio y final del str. 
//sin el segundo parámetro, trim() eliminará estos caracteres:
/*
" " (ASCII 32 (0x20)), espacio simple.
"\t" (ASCII 9 (0x09)), tabulación.
"\n" (ASCII 10 (0x0A)), salto de línea.
"\r" (ASCII 13 (0x0D)), retorno de carro.
"\0" (ASCII 0 (0x00)), el byte NUL.
"\x0B" (ASCII 11 (0x0B)), tabulación vertical.
*/
echo "4 <br>"; 
echo chop($cad3). "<br>";
echo "5 <br>"; 
echo chr(45);
echo "6 <br>"; 
echo strlen($cad6). "<br>"; // strlen mide la longitud de la cadena
echo "7 <br>"; 
echo strchr($cad1,$car1)   . "<br>";
echo "8 <br>"; 
echo str_pad($cad4,$long,$car1,STR_PAD_RIGHT). "<br>";
echo "9 <br>"; 
echo str_pad($cad3,-2,$car2,STR_PAD_BOTH). "<br>";
echo "10 <br>"; 
echo strrchr($cad6,','). "<br>";
echo "11 <br>"; 
echo ucwords($cad7). "<br>"; //Pone en  mayusculas el primer caracter de cada palabra en el string
echo "12 <br>"; 
echo substr($cad1,-9). "<br>";
echo "13 <br>"; 
echo strstr($cad6, 'claveles'). "<br>";
echo "<b>14</b> <br>"; 
echo stristr($cad6, 'claveles'). "<br>";
echo "<b>15</b><br>"; 
echo str_repeat($cad4,6). "<br>";
echo "<b>16</b> <br>"; 
echo count_chars($cad2,3). "<br>";
//Cuenta el número de apariciones de cada byte-value (0..255) en string y lo devuelve de varias maneras. 
echo "<b>17</b> <br>"; 
echo strpos($cad1,".i", 2). "<br>";
echo "<b>18</b> <br>"; 
echo strrpos($cad1,'i'). "<br>";
echo "<b>19</b> <br>"; 
echo strstr($cad1,'@'). "<br>";
echo "<b>20</b> <br>"; 
echo strncmp($cad3,$cad,4). "<br>";


//$cad1="    fp.informatica.iessanjuandelacruz@educa.madrid.org   ";

$data = "educa.madrid.org";
echo "<br>";
echo "EJEMPLO DE COUNT_CHARS <br>";

foreach (count_chars($data, 1) as $i => $val) {
   echo "Se ha encontrado $val instancia (s) de \"" , chr($i) , "\" en la cadena.\n";
}


echo "<br><br><br>";
echo "<b>29</b> <br>"; 
$cad1=substr($cad1, -53,33);
$cad1=str_replace('ss', 's s',$cad1);
$cad1=str_replace('.', '<br>',$cad1);
$cad1=str_replace(' ', '<br>',$cad1);
$auxiliar=ucwords($cad1, "<br>");// Le indicamos que ponga en mayusculas cada palabra del string que va antes o despues de un <br>
echo $auxiliar;

echo "<br><br>";
echo "<b>30</b> <br>"; 

//$cad6= "C/  Claveles  23,20D,28033,Madrid";


$cad6=str_replace('  ', '<br>',$cad6);
$cad6=str_replace(',', '<br>',$cad6);
echo $cad6;

?>