<?php
//Constantes, Self e Parent

use Pessoa as GlobalPessoa;

class Pessoa
{
  const nome = "Pedro";

  public function ExibirNome()
  {
    // self é usado para acessar constantes dentro da classe
    echo self::nome;
  }
}

class Pedro extends Pessoa
{
  const nome = "Henrique";

  public function ExibirNome()
  {
    // parent é usado para referenciar constantes da classe pai
    echo parent::nome . " " . self::nome;
  }
}

$pedro = new Pedro();
$pedro->ExibirNome();
