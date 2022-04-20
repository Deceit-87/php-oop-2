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
    $this->prodotti[] = [
      'prodotto' => $prodotto,
      'quantità' => $quantità,
    ];
    // $this->prodotti[] = $prodotto;
  }

 
  

  public function sumTot()
  {
 
    foreach($this->prodotti as $prod){
      // $this->tot += $el->prezzo;
      $this->tot += $prod['prodotto']->prezzo*$prod['quantità'];
    }
    
    if ($this->tot > 15) {
      $this->costoSpedizione = 0;
    }


  }

  public function countProdotti()
  {foreach($this->prodotti as $prod){
    
    $this->countProdotti += $prod['quantità'];
  }
  }
}
