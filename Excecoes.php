<?php

// Exceção e uma ocorrência anormal que afeta o funcionamento da aplicação


// Exception é a classe base para todas exceptions

class Newsletter
{


  public function CadastrarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Email invalido!", 1);
    } else {
      echo "Email cadastrado com sucesso!";
    }
  }
}

$newsletter = new Newsletter();
try {
  $newsletter->CadastrarEmail("Contato123");
} catch (Exception $e) {
  echo $e->getMessage();
  echo "<br>";
  echo $e->getCode();
  echo "<br>";
  echo $e->getLine();
  echo "<br>";
  echo $e->getFile();
}
