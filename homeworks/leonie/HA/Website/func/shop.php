<?php
function addToCart () {
	global $arrProducts;
	if (isset ($_GET ['addItem'])) {
		if (array_key_exists ($_GET ['addItem'], $_SESSION ['cart'])) {
			$_SESSION ['cart'] [$_GET ['addItem']] ['count'] += 1;
		}else{
			$_SESSION ['cart'] [$_GET ['addItem']] ['name'] = $arrProducts [$_GET ['add Item']] ["name"];
			$_SESSION ['cart'] [$_GET ['addItem']] ['price'] = $arrProducts [$_GET ['add Item']] ["price"];
			$_SESSION ['cart'] [$_GET ['addItem']] ['count'] = 1;


		}
	}
}