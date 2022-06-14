<?php
// Public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como public serão acessíveis por todos que quiserem acessa-los

//Protected - visibilidade protected faz com que todos os HERDEIROS vejam as propriedades ou métodos protegidos como se fossem publicos (dentro deles)

//Private  - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visivel somente pela classe que a declarou


class Veiculo
{
  // pode ser acessado por todos
  public $modelo;
  // pode ser acessado apenas pelos herdeiros
  protected $cor;
  // pode ser acessado apenas dentro da classe
  private $preco;

  public function Andar()
  {
    echo "Andou! <br>";
  }
  public function Parar()
  {
    echo "Parou! <br>";
  }
  private function Acelerar()
  {
    echo "Acelerando! <br>";
  }
  protected function MostrarAcao()
  {
    $this->Acelerar();
  }

  public function setPreco($param)
  {
    $this->preco = $param;
  }
  public function getPreco()
  {
    echo $this->preco;
  }
}

class Carro extends Veiculo
{

  public function LigarCarro()
  {
    echo "Carro Ligado! <br>";
  }

  public function setCor($param)
  {
    $this->cor = $param;
  }
  public function getCor()
  {
    echo $this->cor;
  }

  public function Acelrando()
  {
    $this->MostrarAcao();
  }
}

$veiculo = new Veiculo();
$veiculo->modelo = "Hilux";
// $veiculo->cor = "Branco"; não permitido!
// var_dump($veiculo);
$carro = new Carro();
$carro->modelo = "BMW";
$carro->setCor("Cinza");
$carro->getCor();
// var_dump($carro);
echo "<br>";
$veiculo->setPreco(2000);
$veiculo->getPreco();
echo "<br>";
$carro->Acelrando();
