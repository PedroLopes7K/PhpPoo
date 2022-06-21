<?php

//ASSOCIAÇÃO
//Acontece quando um objeto "utiliza" outro, porem, sem que eles dependam um do outro

class Pedido
{
  public $numero;
  public $cliente;
}

class Cliente
{
  public $nome;
  public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Pedro Henrique";
$cliente->endereco = "Rua xxx, Número: 181";

$pedido = new Pedido();
$pedido->numero = "34";
$pedido->cliente = $cliente;

$dados = array(
  "numero" => $pedido->numero,
  "nomeCliente" => $pedido->cliente->nome,
  "enderecoCliente" => $pedido->cliente->endereco
);

var_dump($dados);
