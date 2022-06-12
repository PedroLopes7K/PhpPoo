<?php

class Login
{
  private $email;
  private $senha;



  public function getEmail()
  {
    return $this->email;
  }

  // setters podem ser usados para filtrar dados antes de adicionar a um atributo diretamente
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

$logar = new Login();
$logar->setEmail("pedro@123");
$logar->setSenha("123");
$logar->Logar();
echo "<br>";
$logar->getEmail();
