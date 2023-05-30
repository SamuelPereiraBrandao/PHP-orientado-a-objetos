<?php
require('produto.php');
require('../models/produto.php');
use models\Produto as ProductModels;
use classes\Produto as ProductClass;

$produto = new ProductModels();

$produto2 = new ProductClass();

$produto->mostrarDetalhes();
echo"<br>";
$produto2->mostrarDetalhes();


