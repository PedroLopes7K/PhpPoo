<?php
// METODOS E ATRIBUTOS ESTATICOS


class Log
{
  public static $user;
  public $userTeste;


  public static function VerificaLogin()
  {
    // utilizamos o self pois o this não acessa atributos estaticos
    echo "O usuário " . self::$user  . " está logado! <br>";
  }

  // apartir do momento que uma classe tem um metodo ou atributo publico, ela pode ser instanciada
  public function SairSistema()
  {
    echo $this->userTeste . " saiu do sistema! <br>";
  }
}

// CLASSES COM METODOS E ATRIBUTOS ESTATICOS NÃO PRECISAM SER INSTANCIADAS
Log::$user = "Pedro";
Log::VerificaLogin();


// AQUI PODE SER INSTANCIADA POIS AGORA A CLASSE POSSUI METODOS E ATRIBUTOS PUBLICOS
$teste = new Log();
$teste->userTeste = "Lucas";
$teste->SairSistema();
