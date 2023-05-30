<?php
require('produto.php');
require('../models/produto.php');

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

echo "<br>";

$produto = new \models\Produto();
$produto->mostrarDetalhes();
