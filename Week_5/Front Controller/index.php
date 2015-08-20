
<?php

require('mysql.php');

$db = new mysql.php('localhost', 'root', 'root', 'acashop');



$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/',$uri);

$category = $parts[3];
echo '$category= ' . $category . '<br/>';

$subCategory = $parts[4];
echo '$SubCategory= ' . $subCategory . '<br/>';

$product = $parts[5];
echo '$Product= ' . $product . '<br/>';
?>
