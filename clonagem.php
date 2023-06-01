<?php
class Pessoa {
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->idade = 25;


$pessoa2  = clone $pessoa;
$pessoa2->idade = 35;

echo "Idade P1: ".$pessoa->idade;
echo "<br>";
echo "Idade P2: ".$pessoa2->idade;
