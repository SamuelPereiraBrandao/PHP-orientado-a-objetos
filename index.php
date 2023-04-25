<?php


class Cachorro {
    public $nome;
    public $idade;
    public $raça;


    public function Comer() {
        echo "AÇÃO COMER(): ".$this->nome." estava com fome e comeu toda a ração!";
    }
    public function Informacoes(){
        echo "INFORMAÇÕES: ".$this->nome.", ".$this->idade." anos, Raça: ".$this->raça;
    }
}

$Cachorro = new Cachorro();
$Cachorro->nome = "Zeus";
$Cachorro->idade = 3;
$Cachorro->raça = 'PitMonster';


$Cachorro->Comer();
echo"<br>";
$Cachorro->Informacoes();
