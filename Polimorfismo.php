<?php

// O POLIMORFISMO É SIMPLESMENTE SUBSTITUIR OU REESCREVER UM METODO HERDADO DA CLASSE PAI

class Animal
{
  public function Andar()
  {
    echo "O animal andou! <br>";
  }
  public function Correndo()
  {
    echo "O animal está correndo! <br>";
  }
}

class Cavalo extends Animal
{

  public function Andar()
  {
    echo "O cavalo está andando! <br>";
  }

  public function Correr()
  {
    $this->Correndo();
  }
}

$animal = new Cavalo();
$animal->Andar();
$animal->Correr();
