<?php
// uma classe abstrata serve de modelo para outras. E não podem ser instanciadas.
abstract class Banco
{

  protected $saldo;
  protected $limiteSaque;
  protected $juros;


  public function setSaldo($s)
  {
    $this->saldo = $s;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  // Os herdeiros da classe obrigatoriamente precisam ter as funções abstratas da classe
  abstract protected  function Sacar($s);
  abstract protected function Depositar($d);
}


class Itau extends Banco
{

  public function Sacar($s)
  {
    $this->saldo -= $s;
  }
  public function Depositar($d)
  {
    $this->saldo += $d;
    echo "Depositou: " . $d;
  }
}
// class Bradesco extends Banco
// {
//   public function Sacar()
//   {
//   }
//   public function Depositar()
//   {
//   }
// }

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> SALDO: " . $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> SALDO: " . $itau->getSaldo();
$itau->Depositar(290);
echo "<hr> SALDO: " . $itau->getSaldo();
