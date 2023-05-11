<?php
require 'classes/produto.php';
require 'models/produto.php';

$produto  = new \models\Produto();
$produto->mostrarDetalhes();
echo"<hr>";
$produto  = new \classes\Produto();
$produto->mostrarDetalhes();