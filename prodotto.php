<?php

class Prodotto {
  public $categoria;
  public $nome;
  public $marca;
  public $descrizione;
  public $prezzo;

  function __construct($_categoria, $_nome, $_marca, $_descrizione, $_prezzo){
    $this->categoria = $_categoria;
    $this->nome = $_nome;
    $this->marca = $_marca;
    $this->descrizione = $_descrizione;
    $this->prezzo = $_prezzo;
  }
};