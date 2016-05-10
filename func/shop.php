<?php
// NOTE: Session 3
/**
 * Legt ein Gegenstand in den Warenkorb.
 * Liegt ein Produkt (eine ID) bereits im Warenkorb, dann zähle die Anzahl des Produktes hoch.
 */
function addToCart()
{
    global $arrProducts;
    if (isset($_GET['addItem'])) {
        if(empty($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
        if (array_key_exists($_GET['addItem'], $_SESSION['cart'])) {
            $_SESSION['cart'][$_GET['addItem']]['count'] += 1;
        } else {
            $_SESSION['cart'][$_GET['addItem']]['name'] = $arrProducts[$_GET['addItem']]["name"];
            $_SESSION['cart'][$_GET['addItem']]['price'] = $arrProducts[$_GET['addItem']]["price"];
            $_SESSION['cart'][$_GET['addItem']]['count'] = 1;
        }
        addStatusMessage($arrProducts[$_GET['addItem']]["name"] . " wurde erfolgreich in den Warenkorb gelegt");
    }
}