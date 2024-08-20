<?php 

/*Crear una clase*/
class Usuario{

    //crear propiedades (atributos, varibles)
    public $nombre;                       
    public $email;                        

    //Constructor
/*     public function __construct(){
        echo "carga el constructor";
    } */

    public function __construct($nombre, $email){
    $this->nombre = $nombre;
    $this->email=$email;
}

    //crear metodos (funciones)
    public function presentacion(){
        return $this->nombre." Hola a todos";
    }

    //se usa para cerrar conexiones a DB
    //limpiar y cerrar, carga al final si no hay mas elementos
    //DESTRUCTOR
    public function __destruct()
    {
        echo "Corriendo destructor";
    }
}

//instanciar la clase pra poder acceder a las propiedades
$usuario1 = new Usuario("Yuldor", "yuldor@yuldor.com");
echo "Se llama ".$usuario1->nombre." y el email es ".$usuario1->email;
echo "<br>";

$usuario2 = new Usuario("Melo", "melo@melo.com");
echo "Se llama ".$usuario2->nombre." y el email es ".$usuario2->email;


?>