<?php

require('DBCommon.php');

$db = new DBCommon('localhost', 'root', 'root', 'acashop');

$query = 'select * from aca_product';

$db->setQuery($query);

$products = $db->loadObjectList();

// echo '<pre>';
// print_r($query);
// echo '</pre>';

$query = 'select * from aca_product where product_id = 8';
$db->setQuery($query);
$product = $db->loadObject();

echo '<h1>' . $product->name . '</h3>';
echo '<h3>' . $product->price . '</h1>';
echo '<img src="' . $product->image .'"/>';
