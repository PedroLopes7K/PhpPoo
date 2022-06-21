<?php

// COMPOSIÇÃO

// Na composição, uma classe cria uma instancia de outra classe dentro de si própria, sendo assim, quando ela for destruida, a outra classe também será.

use Pessoa as GlobalPessoa;

class Pessoa
{
  public function AtribuirNome($nome)
  {
    return "O nome da pessoa é " . $nome;
  }
}

class Exibe
{
  public $pessoa;
  public $nome;

  function __construct($nome)
  {
    // criando uma instancia de pessoa 
    $this->pessoa = new Pessoa();
    $this->nome = $nome;
  }

  public function ExibirNome()
  {
    echo $this->pessoa->AtribuirNome($this->nome);
  }
}

$exibe = new Exibe('Pedro');
$exibe->ExibirNome();
