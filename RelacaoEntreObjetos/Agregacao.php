<?php
// AGREGAÇÃO

//Na agregação, uma classe precisa da outra para executar sua ação, ou seja, um classe utiliza a outra, como parte de si propria

use classes\Produto;

class Produtos
{
  public $nome;
  public $valor;

  function __construct($nome, $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }
}

class Carrinho
{
  public $produtos;

  public function adiciona(Produtos $produto)
  {
    $this->produtos[] = $produto;
  }

  public function exibe()
  {
    foreach ($this->produtos as $produto) {
      echo $produto->nome . "<br>";
      echo $produto->valor . "<br>";
      echo "<hr>";
    }
  }
}
$produto1 = new Produtos('Notebook', 2000);
$produto2 = new Produtos('celular', 800);
$produto3 = new Produtos('tenis', 123);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->exibe();
