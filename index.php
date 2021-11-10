<?php

require __DIR__ . "classes/Product.php";
require __DIR__ . "classes/User.php";
require __DIR__ . "classes/CartaDiCredito";

$user1 = new User ("Angelo", "Bianchi", 25, "abianchi@gmail.com");

$user2 = new User ("Giuseppe", "Verdi", 58, "gverdi@gmail.com");

$cdc1 = new CartaDiCredito(542451, "Angelo Bianchi", 546, "08/23");
$cdc2 = new CartaDiCredito(454545, "Giuseppe Verdi", 745, "02/22");


$user1->insertCreditCard($cdc1);
$user2->insertCreditCard($cdc2);

$product1 = new Product ("Videogame", "TheSims", 2003, 14.99);

$product2 = new Product ("Videogame", "Fifa21", 2020, 15.99);

