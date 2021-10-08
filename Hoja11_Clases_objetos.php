<?php

/*
1.Crear una clase llamada Persona con unas propiedades donde se almacenen su nombre, apellido1, apellido2, 
edad y NIF. 
Definir un constructor que inicialice estas propiedades y el método para visualizarlas (método visualizar). 
Definir un objeto de la clase Persona y llamar al método visualizar. 
Modificar la clase Persona para que las propiedades nombre y edad estén protegidas. 
Definir un objeto de la clase Persona y tratar de modificar el atributo edad.  
*/



class Persona{

   protected String $nombre; 
   public String $apellido1;
   public String $apellido2; 
   protected int $edad; 
   public String $NIF;  
    


    public function __construct(String $nombre, String $apellido1,String $apellido2, int $edad, String $NIF) {

        $this->nombre=$nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
        $this->edad=$edad;
        $this->NIF=$NIF;
        
     
    }


    public function visualizar(){

      echo $this->nombre . "<br>";
      echo $this->apellido1 . "<br>";
      echo $this->apellido2 . "<br>";
      echo $this->edad . "<br>";
      echo $this->NIF . "<br>";
    }


    //tenemos que declarar un metodo static para poder llamar en el "main" al metodo con el nombre de la clase
    public static function prueba1(){
        echo "<br>Prueba funcion static <br>";
    }

    //METODOS GETTER Y SETTER 
    public function getEdad()
    {

        return $this->edad;
    }
 
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }


}

$persona1 = new Persona("Juanjose", "Cogollo","Caviedes",28,"0929920C");

$persona1->visualizar();

//Forma para llamar a un metodo statico(con el nombre de la clase). 
Persona::prueba1();

//Utilizamos el metodo set para cambiar el atributo edad 
$persona1->setEdad(29);
//Mostramos el resultado con la funcion getter.
echo $persona1->getEdad();


?>