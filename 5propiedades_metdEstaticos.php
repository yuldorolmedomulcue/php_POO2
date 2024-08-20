<?php

class Usuario{
    public $nombre;
    public static $edad_minima = 18;

    public static function validar_edad($edad){
        if ($edad >= self::$edad_minima) {
            return true;
        }else{
            return false;
        }
    }
}
$edad = 17;
if (Usuario::validar_edad($edad)) {
    echo "Puede ingresar";
}else{
    echo "No puede ingresar";
}

?>