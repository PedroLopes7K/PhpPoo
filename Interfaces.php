<?php

// USAMOS INTERFACES PARA DEFINIR UM MODELO A SER  USADO POR OUTRAS CLASSES

interface Crud
{
  // os metodos da interface devem ser publicos
  public function Create();
  public function Read();
  // os parametros definidos na interface tbm devem ser usados na classe que herda
  public function Update($dado);
  public function Delete($dado);
}

// usamos implements para usarmos uma interface
// a classe noticia é obrigada a usar os metodos da inteface
class Noticias implements Crud
{
  public function Create()
  {
    // logica para criar uma noticia
  }
  public function Read()
  {
    // logica para ler uma noticia
  }

  public function Update($dado)
  {
    // logica para atualizar uma noticia
  }
  public function Delete($dado)
  {
    // logica pra deletar uma noticia
  }
}
