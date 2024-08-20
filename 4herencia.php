<?php  

class Usuario{
    protected $nombre =  "Yuldor Mulcue";
    protected $edad = 42;
    protected $ahorro = 300000;
}

class Cliente extends Usuario{
    public function ahorro_cliente(){
        return $this->nombre." tiene: ".$this->edad." años y ".$this->ahorro." mil ahorrados";
    }
}

$cliente1 = new Cliente;
echo $cliente1->ahorro_cliente();

?>