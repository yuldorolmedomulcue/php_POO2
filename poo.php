<?php 
/*Crear una clase*/
class Usuario{

    //crear propiedades (atributos, varibles)
    public $nombre;                         //= "Yuldor";
    public $email;                         //= "yuldor@yuldor.com";

    //crear metodos (funciones)
    public function presentacion(){
        return $this->nombre." Hola a todos";
    }
}

//instanciar la clase pra poder acceder a las propiedades
$usuario1 = new Usuario;
$usuario1->nombre="Yuldor";
echo "<br>";
$usuario1->email = "yuldor@yuldor.com";
echo "<br>";
echo$usuario1->presentacion();

$usuario2 = new Usuario;
$usuario2->nombre="Melody";
echo "<br>";
$usuario2->email = "melody@melody.com";
echo "<br>";
echo $usuario2->presentacion();
?>