<?php

//  Herança é um recurso que permite que classes compartilhem atributos e métodos,
//   afim de reaproveitar códigos ou comportamentos generalizados

class Pessoa
{
  public $nome;
  public $idade;
  public $altura;

  public function Falar()
  {
    echo "Meu nome é $this->nome e tenho $this->idade anos! <br>";
  }

  public function Andar()
  {
    echo " $this->nome está andando! <br>";
  }
}

class Homem extends Pessoa
{
  function JogarBola()
  {
    echo "Jogando futebol! <br>";
  }
}

class Mulher extends Pessoa
{
  function JogarVolei()
  {
    echo "Jogando volei! <br>";
  }
}

$pedro = new Homem();
$pedro->nome = "Pedro Henrique";
$pedro->idade = 20;
$pedro->altura = 1.86;
$pedro->Falar();
$pedro->JogarBola();
echo "<br>";
var_dump($pedro);
echo "<br>";

$julia = new Mulher();
$julia->nome = "Julia Silva";
$julia->idade = 23;
$julia->altura = 1.65;
$julia->Andar();
$julia->JogarVolei();
var_dump($julia);
