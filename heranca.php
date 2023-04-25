<?php

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou!";
    }
    
    public function Parar(){
        echo "Parou!";
    }

}

class Carro extends Veiculo {
    
}

class Moto extends Veiculo {

}


$carro = new Carro();
$carro -> modelo = 'Gol';
$carro -> cor = 'Verde';
$carro -> ano = '2023';

var_dump($carro);
echo "<br>";
echo "O carro ".$carro->Andar()."";
echo "<br>";

$moto = new Moto();
$moto -> modelo = "Honda Biz";
$moto -> cor = 'Vermelho';
$moto -> ano = '2023';
$moto->Parar();
echo "<br>";
var_dump($moto);