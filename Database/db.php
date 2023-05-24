<?php

include_once __DIR__ . '/../Models/Food.php';
include_once __DIR__ . '/../Models/Toy.php';

$dog = new Category('Dog', 'fa-solid fa-dog');
$cat = new Category('Cat', 'fa-solid fa-cat');

$product = new Product('Cuccia', 50, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQfuFjv358ewiG_V8sSKdYK0yZ_TfC-QXfD9x2LVvqRcEjAB6SEKnUoyP2rdGKHqt_OH3LHp3-pT8EfG7SM7vqTg325EvZiABp1TnhaMOAws60rzAUF7dKSbw&usqp=CAE', 'PetEasy', $dog);

$food = new Food('Crocchette', 20, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcS5MAKhNoOd79qYV0PEWRfUlJarD2abxVZ21M_N-CzQi7TCOraJ97n_32fWcE8KmoSR2JOYYljRj_1egEmIwiQVMaedFLGBlDx_X77OIWK5xPBJ3hwInkMX3g&usqp=CAE', 'Hills', $cat, 'Secco', 'Domani', 'Pollo', 1, 'kg');

$toy = new Toy('Pallina', 5, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSGeKfHOivpUe8rc8uuFrI9oQ1VlSKnkwR7gOMlTdhWA4NzXUfXaa2JGe_tQyp483fXbPyzk9CEw5fVt9977G8p2r02sUsgrK4221vBHish_m07o9Pv2Pxcsw&usqp=CAE', 'Toys', $dog, 'Palla');


$products = [
    $product, $food, $toy
];