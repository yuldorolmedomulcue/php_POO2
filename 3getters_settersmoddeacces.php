<?php 

/*Crear una clase*/ 
class Usuario{

    //crear propiedades (atributos, varibles)
    private $nombre;                       
    private $email;                        

    public function __construct($nombre, $email){
    $this->nombre = $nombre;
    $this->email=$email;
}
    //Metodos magicos personalizados getters y setters (asi acceder a los privates)
    public function getNombre(){
        return $this->nombre;
    }

    //2validamos si la propiedad existe
    //2vamos a settearlo y vamanda nombre dinamicamente
    public function setNombre($nombre){
        $this->nombre= $nombre;
    }

    //se usa para cerrar conexiones a DB
    //limpiar y cerrar, carga al final si no hay mas elementos
    //DESTRUCTOR
/*     public function __destruct()
    {   
        echo " Corriendo destructor";
    } */


    //Metos magicos de php __get __set
    public function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    //Metos magicos de php __set
    public function __set($propiedad, $valor){
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
        return $this;
    }
}

//instanciar la clase pra poder acceder a las propiedades
$usuario1 = new Usuario(" Yuldor", " yuldor@yuldor.com");

//con getter y setters, es metodo
/* echo $usuario1->getNombre();*/
echo "<br>"; 

//2settear
/* echo $usuario1->setNombre("Melo");
echo $usuario1->getNombre(); */             
echo $usuario1->__get('email');

//this
$usuario1->__set('email',  " melo@melo.com");
echo $usuario1->__get("email");
?>