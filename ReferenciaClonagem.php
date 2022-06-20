<?php
// Referência e Clonagem de Objetos

class Pessoa
{
  public $idade;
}
// REFERENCIA
$pessoa1 = new Pessoa();
$pessoa1->idade = 25;

// nesse caso pessoa2 faz referencia a pessoa1
// tudo que se altera em pessoa2 tbm se altera em pessoa1
$pessoa2 = $pessoa1;
$pessoa2->idade = 35;

echo $pessoa1->idade;
echo "<br>";
// CLONE
$pessoa3 = new Pessoa();
$pessoa3->idade = 29;

$pessoa4 = clone $pessoa3;
$pessoa4->idade = 13;

echo $pessoa4->idade;
