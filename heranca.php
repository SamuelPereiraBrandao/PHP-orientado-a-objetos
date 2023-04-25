<?php

class Veiculo {
    protected $modelo;
    public $cor;
    public $ano;
    private $ano2;

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



echo"<br>";
class Pessoa {
    protected $nome;
    public $idade;
    public $altura;

    public function __construct($nome, $idade, $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
    }


}

class PessoaPequena extends Pessoa {
    public $alturapequena;
    public function __construct($nome, $idade, $altura, $alturapequena) {
        parent::__construct($nome, $idade, $altura);
        $this->alturapequena = $alturapequena;
    }
}

$nome = $_GET['nome'] ?? null; // Verifica se a variável existe antes de usá-la
$idade = $_GET['idade'] ?? null; // Verifica se a variável existe antes de usá-la
$altura = $_GET['altura'] ?? null; // Verifica se a variável existe antes de usá-la
$alturapequena = $_GET['alturapequena'] ?? null; // Verifica se a variável existe antes de usá-la

if ($nome && $idade && $altura && $alturapequena) {
    $Pessoal = new PessoaPequena($nome, $idade, $altura, $alturapequena);
    var_dump($Pessoal);
} else {
    echo 'Por favor, preencha todos os campos.';
}
