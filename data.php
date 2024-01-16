<?php
require_once './models/Category.php';
require_once './models/Product.php';
require_once './models/Food.php';

// Creare le istanze delle categorie
$dogsCategory = new Category('Cani');
$catsCategory = new Category('Gatti');

// Organizzare i prodotti in un array
$products = [
    new Food('https://picsum.photos/id/100/200', 'Cibo per cani', 20.99, $dogsCategory, 'Sapore pollo', 0),
    new Product('https://picsum.photos/id/200/200', 'Giocattolo per gatti', 12.50, $catsCategory, 'Giocattolo interattivo per il divertimento del tuo gatto', 10),

    new Food('https://picsum.photos/id/300/200', 'Cibo per gatti', 15.99, $catsCategory, 'Sapore manzo', 20),
    new Product('https://picsum.photos/id/400/200', 'Giocattolo per cani 2', 8.99, $dogsCategory, 'Giocattolo resistente per cani di tutte le taglie', 30),

    new Product('https://picsum.photos/id/500/200', 'Cuccia per cani', 18.50, $dogsCategory, 'Cuccia morbida e confortevole per il tuo cane', 40),
    new Product('https://picsum.photos/id/600/200', 'Cuccia per gatti', 10.75, $catsCategory, 'Cuccia elegante per il tuo gatto', 50),

    new Product('https://picsum.photos/id/700/200', 'Cuccia cani', 22.75, $dogsCategory, 'Cuccia da esterno per cani di medie dimensioni', 0),
    new Product('https://picsum.photos/id/800/200', 'Giocattolo per gatti 3', 14.25, $catsCategory, 'Giocattolo a piume per intrattenere il tuo gatto', 10),

    new Food('https://picsum.photos/id/900/200', 'Cibo per cani', 19.99, $dogsCategory, 'Sapore anatra', 20),
    new Product('https://picsum.photos/id/101/200', 'Giocattolo per gatti', 9.99, $catsCategory, 'Giocattolo a forma di topo per il tuo gatto', 30),

    new Food('https://picsum.photos/id/111/200', 'Cibo per cani', 17.25, $dogsCategory, 'Sapore carne mista', 40),
    new Product('https://picsum.photos/id/121/200', 'Giocattolo per gatti', 11.50, $catsCategory, 'Palla interattiva per il tuo gatto', 50),
];

// Ritorna l'array dei prodotti
return $products;
