<?php
// invoke
// tostring
// get
// set


class Pessoa
{
  private $dados = array();

  public function __set($nome, $valor)
  {
    $this->dados[$nome] = $valor;
  }

  public function __get($nome)
  {
    return $this->dados[$nome];
  }

  public function __toString()
  {
    return "Tentando imprimir o objeto! <br>";
  }

  public function __invoke()
  {
    return "Objeto como função! <br>";
  }
}

$pessoa = new Pessoa();
$pessoa->nome = "Pedro";
// ESSES ATRIBUTOS SÃO CRIADOS AUTOMATICAMENTE ATRAVÉS DO SET
$pessoa->idade = 50;
$pessoa->sexo = "m";

// METODO GET
echo $pessoa->nome . "<br>";
echo $pessoa->idade . "<br>";

// TO STRING
echo $pessoa;

// __INVOKE
echo $pessoa();
