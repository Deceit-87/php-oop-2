<?php

require_once __DIR__ . '/index.php';

class Cart
{
  public $prodotti = [];
  public $countProdotti;
  public $tot;
  public $costoSpedizione = 15;

  public function addProdotti($prodotto, $quantità = 1)
  {
    // $this->prodotti[] = [
    //   'prodotto' => $prodotto,
    //   'quntità' => $quantità,
    // ];
    $this->prodotti[] = $prodotto;
  }

  public function sumTot()
  {
    foreach ($this->prodotti as $value) {
      $this->tot += $value->prezzo;
    }
    if ($this->tot > 15) {
      $this->costoSpedizione = 0;
    }
  }

  public function countProdotti()
  {
    return $this->countProdotti =  count($this->prodotti);
  }
}
