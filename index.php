<?php 

require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/cart.php';
require_once __DIR__. '/user.php';
require_once __DIR__. '/payMethods.php';
require_once __DIR__. '/registredUser.php';







$prodotto1 = new Prodotto (
    'Alimentazione',
    'Gatti',
    'Monge Sterilised ricco di Pollo',
    'Monge',
    'Crocchette per gatti adulti sterilizzati Monge Sterilised ricco di Pollo, alimento completo a basso contenuto di grassi per la perfetta forma fisica del tuo amico quattro zampe.',
    3.99
);
$prodotto2 = new Prodotto (
    'Abbigliamento',
    'Cani',
    'Maglione Passion San Valentino Rosso ',
    'Lovedi',
    'Lovedì Maglione Passion San Valentino color Rosso, creato per avvolgere e proteggere il tuo cane durante le giornate più fredde dell\'anno. Il prodotto è stato realizzato in lana merinos e si adatta perfettamente al corpo del tuo cane. Passion San Valentino color Rosso è disponibile nelle taglie: 24, 27, 30, 33, 36, 39, 43, 47, 51, 55, 60. Per selezionare quella corretta misura la lunghezza del dorso del tuo cane, troverai così la taglia da comprare. Prodotto realizzato in Italia.',
    23.10
);




echo $prodotto1->categoria.'<br>'.$prodotto1->sottoCategoria.'<br>'. $prodotto1->nome. '<br>'.$prodotto1->marca.'<br>'.$prodotto1->descrizione.'<br>'.$prodotto1->prezzo.'<br>';
echo $prodotto2->categoria.'<br>'.$prodotto2->sottoCategoria.'<br>'. $prodotto2->nome. '<br>'.$prodotto2->marca.'<br>'.$prodotto2->descrizione.'<br>'.$prodotto2->prezzo.'<br>';





$cart1 = new Cart(
    [],
    '',
    '',
    ''
);


$cart1->addProdotti($prodotto1,1);
$cart1->addProdotti($prodotto2,2);
$cart1->sumTot();
$cart1->countProdotti();

var_dump($cart1);

// $guest = new User('luca','rodolfi','gogog@gmail.com');
$guest = new registredUser('luca','rodolfi','gogog@gmail.com','pluto');

$card = new PayMethods('345545679867','luca rodolfi','087','02/2024');

$guest->addPayment( $card );
var_dump($guest);

