<?php
//classes são a estrutura do objeto
// Primeira letra sempre maiuscula
class Carro
{

  // atributos: Os atributos são as caracteristicas da Classe/Objeto
  public $marca;
  public $ano;

  //metodos: Os metodos/funções são as ações da Classe/Objeto
  public function Andando()
  {
    echo "O carro está andando. <br>";
  }
  public function Infos()
  {
    // o this é usado para acessar os atributos ou metodos dentro de uma classe
    echo "O carro é da marca $this->marca e do ano de $this->ano.";
  }
}

// instanciando uma classe
$bmw = new Carro();
var_dump($bmw);
echo "<br>";
$bmw->marca = "BMW";
$bmw->ano = 2020;
var_dump($bmw);
$bmw->Andando();
$bmw->Infos();
