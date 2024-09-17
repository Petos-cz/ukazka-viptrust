<?php
session_start();

// Inicializace košíku v session, pokud ještě neexistuje
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Inicializace seznamu produktů
$products = [
    ['id' => 1, 'name' => 'iPhone 14', 'price' => 990],
    ['id' => 2, 'name' => 'iPhone 13 Pro', 'price' => 790],
    ['id' => 3, 'name' => 'iPhone 16 Pro', 'price' => 1490]
];
?>