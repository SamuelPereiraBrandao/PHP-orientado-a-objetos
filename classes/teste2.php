<?php
// arquivo1.php
require_once 'teste.php';

$obj = new API();
$resultado = $obj->meuMetodoADD();
echo $resultado;

echo"<br>";

$resultado2 = $obj->meuMetodoDEL();
echo $resultado2;

echo"<br>";

$resultado3 = $obj->meuMetodoATT();
echo $resultado3;
