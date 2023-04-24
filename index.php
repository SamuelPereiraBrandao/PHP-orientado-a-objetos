<?php


class Cachorro {
    public $nome;
    public $idade;
    public $raça;


    public function Comer() {
        echo $this->nome." estava com fome e comeu toda a ração!";
    }
    public function Informacoes(){
        echo $this->nome.", ".$this->idade.", ".$this->raça;
    }
}

$Cachorro = new Cachorro();
$Cachorro->nome = "Zeus";
$Cachorro->idade = 3;
$Cachorro->raça = 'PitMonster';


$Cachorro->Comer();