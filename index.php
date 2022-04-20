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
    'Crocchette per ',
    3.99
);
$prodotto2 = new Prodotto (
    'Abbigliamento',
    'Cani',
    'Maglione Passion San Valentino Rosso ',
    'Lovedi',
    'Lovedì Maglione.',
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
$cart1->addProdotti($prodotto2,5);
$cart1->sumTot();

$cart1->countProdotti();
var_dump($cart1);
echo "<h2>QUANTITà PRODOTTI <h2/>";
echo $cart1->countProdotti;
echo "<h2>TOTOALE PRODOTTI <h2/>";
echo $cart1->tot . ' €';



// $guest = new User('luca','rodolfi','gogog@gmail.com');
$guest = new registredUser('luca','rodolfi','gogog@gmail.com','pluto');

$card = new PayMethods('345545679867','luca rodolfi','087','02/2024');

$guest->addPayment( $card );
// var_dump($guest);

