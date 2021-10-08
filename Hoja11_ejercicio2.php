<?php

/*
2.	Crear una clase llamada Empleado que herede de la clase Persona añadiendo las propiedades sueldo y antigüedad. 
Definir un constructor que inicialice todas las propiedades del empleado. 
Añadir los métodos de incrementar_sueldo (un porcentaje), incrementar antigüedad, visualizar sueldo, visualizar antigüedad. 
Sobreescribir el método visualizar de la clase Persona para visualizar el empleado. 
Modificar la clase Empleado para que la propiedad sueldo esté protegida.
Definir un objeto de la clase Empleado, llamar a sus métodos e intentar modificar el sueldo y la edad.
Definir un método que visualice un mensaje si debe pagar o no impuestos extra (si el sueldo supera los 3.000 euros). 
*/

############################################################################
############################## CLASE PERSONA ###############################
############################################################################
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
 
     
 
 
 }

############################################################################
############################## CLASE EMPLEADO ##############################
############################################################################

class Empleado extends Persona{

    
    protected $sueldo;
    protected $antiguedad;
  
        function __construct($nombre,$apellido1,$apellido2,$edad, $NIF,$sueldo,$antiguedad) {

            //Constructor de la clase padre 
            parent::__construct($nombre,$apellido1,$apellido2,$edad, $NIF);
            //Atributos de la clase hijo
            $this->sueldo=$sueldo;
            $this->antiguedad=$antiguedad;

        }

        //GETTERS Y SETTERS

        public function getSueldo(){
        return $this->sueldo;
    }


        public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
        }

        public function getEdad()
        {
 
         return $this->sueldo;
        }
  
        public function setEdad($edad)
        {
         $this->edad = $edad;
        }

        //incrementos
        public function incrementar_sueldo($porcentaje){

            echo "Tu sueldo antes era: " . $this->sueldo . "<br>";

            $suma=0;
            $resultado_total=0;
            $suma=($this->sueldo*$porcentaje)/100;
            $resultado_total=$this->sueldo+$suma;
            $this->sueldo=$resultado_total;

            echo "Se ha producido un aumento de: $suma € <br>";
            echo "Tu sueldo ahora es de: $resultado_total<br>";

        }


        public function incrementar_antiguedad($años){

            echo "Tus años de antiguedad antes eran: " . $this->antiguedad . "<br>";

            $resultado_total=0;
            $resultado_total=$this->antiguedad+$años;
            $this->antiguedad=$this->antiguedad+$años;
            
            
            echo "Se ha producido un aumento de: $años años de antiguedad <br>";
            echo "Tus años de antiguedad ahora son: $resultado_total<br>";

        }

       //visualizar sueldo, visualizar antigüedad sobreescribir visualizar. 
        
       public function visualizar_sueldo(){

            echo "Tu sueldo es: " . $this->sueldo;
       }

       public function visualizar_antiguedad(){

        echo "Tus años de antiguedad son: " . $this->antiguedad;
   }


        public function visualizar(){
 
        echo "<b>Nombre:</b> " . $this->nombre . "<br>";
        echo "<b>Primer apellido:</b> " . $this->apellido1 . "<br>";
        echo "<b>Segundo apellido:</b> " . $this->apellido2 . "<br>";
        echo "<b>Edad:</b> " . $this->edad . "<br>";
        echo "<b>NIF:</b> " . $this->NIF . "<br>";
        echo "<b>Sueldo:</b> " . $this->sueldo . "<br>";
        echo "<b>Antiguedad: </b>" . $this->antiguedad . "<br>";
  }


        //IMPUESTOS

        public function aPAGAR(){

            if($this->sueldo>3000){
                echo "A PAGAR, A PAGAR!";

            }else{
                echo "Tranquilo chaval";
            }

        }




     }
     

############################################################################
############################## CLASE EMPRESA ##############################
############################################################################

/*
Realizar una clase Empresa implementada mediante un array de objetos de la clase Empleado que hereda de la clase Persona. 
La clase Empresa cuenta con las variables nombre de la empresa, representante_legal, CIF, dirección, localidad, 
código_postal, país y número de empleados. 
Definir los principales métodos de la clase Empresa (constructor, set, get y visualizar). 
 La clase Empresa tendrá además los siguientes métodos: 

Añade_empleado (antigüedad 0, sueldo 1.800 euros) 

Elimina_empleado (elimina un empleado a partir del  NIF) 

Visualiza_empleados (visualiza los datos de todos los empleados ordenados alfabéticamente) 

Mas_antiguos (visualiza los datos del empleado con más antigüedad) 

Menos_antiguos (visualiza los datos de los empleados con menos antigüedad) 

Sueldo_medio (obtiene y visualiza el sueldo medio de todos los empleados de la empresa) 

Antigüedad_media (obtiene y visualiza la antigüedad media de los empleados en la empresa. 

Pagan_impuestos_extra (visualiza los nombres y apellidos de los empleados cuyos sueldos superan los 3.000 euros. El listado debe aparecer ordenado por sueldo descendentemente). 

*/

class Empresa{

  

    protected $nombre_empresa;
    protected $representante_legal;
    protected $CIF;
    protected $direccion;
    protected $localidad;
    protected $codigoPostal;
    protected $pais;
    protected $numero_empleados;
    protected $Empleados=[]; 

    

    public function add_empleado(Empleado $emp1){

        //$this->Empleados[]=$emp1; -->igual que el array_push
        array_push($this->Empleados, $emp1);
    }


}




?>