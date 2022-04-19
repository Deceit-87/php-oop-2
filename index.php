<?php 

require_once __DIR__. '/prodotto.php';

$prodotto1 = new Prodotto (
    'Alimentazione',
    'Monge Sterilised ricco di Pollo',
    'Monge',
    'Crocchette per gatti adulti sterilizzati Monge Sterilised ricco di Pollo, alimento completo a basso contenuto di grassi per la perfetta forma fisica del tuo amico quattro zampe.',
    '€ 3,99'
);




echo $prodotto1->categoria.'<br>'. $prodotto1->nome. '<br>'.$prodotto1->marca.'<br>'.$prodotto1->descrizione.'<br>'.$prodotto1->prezzo;