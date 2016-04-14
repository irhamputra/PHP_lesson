<?php
// NOTE: Session 3
/*
function addToCart(){
    global $arrProducts;
    if(isset($_GET['addItem'])){
        if(array_key_exists($_GET['addItem'], $_SESSION['cart'])){
            $_SESSION['cart'][$_GET['addItem']]['count'] += 1;
        }else{
            $_SESSION['cart'][$_GET['addItem']]['name'] = $arrProducts[$_GET['addItem']]["name"];
            $_SESSION['cart'][$_GET['addItem']]['price'] = $arrProducts[$_GET['addItem']]["price"];
            $_SESSION['cart'][$_GET['addItem']]['count'] = 1;
        }
    }
}*/