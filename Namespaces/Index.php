<?php

require "Classes/Produto.php";
require "Models/Produto.php";

// NAMESPACE E UTILIZADO PARA DIFERENCIAR CLASSES COM O MESMO NOME

use models\Produto as ProdutoModel;
use classes\Produto as ProdutoClasse;

// $produto1 = new \classes\Produto();
$produto1 = new ProdutoModel();
$produto1->MostrarDetalhes();
$produto2 = new ProdutoClasse();
$produto2->MostrarDetalhes();
