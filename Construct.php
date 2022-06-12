<?php

class Login
{
  private $email;
  private $senha;
  private $nome;

  // O construct é inicializado no momento em que a Classe é instanciada.
  public function __construct($email, $senha, $nome)
  {
    $this->nome = $nome;
    $this->setEmail($email);
    $this->setSenha($senha);
  }


  public function getNome()
  {
    return $this->nome;
  }
  public function getEmail()
  {
    return $this->email;
  }


  public function setEmail($param)
  {
    $mail = filter_var($param, FILTER_SANITIZE_EMAIL);
    $this->email = $mail;
  }
  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha($param)
  {
    $this->senha = $param;
  }

  public function Logar()
  {
    if ($this->email == "pedro@123" and $this->senha == "123") {
      echo "Logado com sucesso!";
    } else {
      echo "Dados inválidos!";
    }
  }
}

$logar = new Login("pedro@123", "123", "Pedro");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo $logar->getNome();
