<?php
abstract class Banco {
    protected $saldo/
    protected $limiteSaque;
    protected $juros;

    public function Sacar() {

    }
    public function Depositar(){

    }

}

class Itau extends Banco {

}

class Bradesco extends Banco {

}

$Itau = new Itau();
$Bradesco = new Bradesco();