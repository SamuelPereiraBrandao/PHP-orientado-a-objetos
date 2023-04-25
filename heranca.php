<?php

class Veiculo {
    protected $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou!";
    }
    
    public function Parar(){
        echo "Parou!";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

class Carro extends Veiculo {
    public function ligarLimpador (){
        echo "Limpando vidro! <br>";
    }
}

class Moto extends Veiculo {
    public function AcelerarMoto(){
        echo "Acelerando moto!";
    }
}

echo"Carro: <br>";
$carro = new Carro();
$carro -> setModelo("HILUX");
$carro -> cor = 'Verde';
$carro -> ano = '2023';
$carro -> ligarLimpador();
var_dump($carro);
echo "<br>";
echo "O carro ".$carro->Andar()."";
echo "<br>";
echo"<hr>Moto: <br>";
$moto = new Moto();
$moto -> setModelo("BIZ");
$moto -> cor = 'Vermelho';
$moto -> ano = '2023';
$moto->Parar();
echo "<br>";
var_dump($moto);
echo "<br>";
$moto->AcelerarMoto();
