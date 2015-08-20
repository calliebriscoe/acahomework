<?php

require('DBCommon.php');

$db = new DBCommon('localhost', 'root', 'root', 'acashop');

?>

<br>
<form name="productionForm" action="<?php echo($_SERVER['PHP_SELF']);?>" method="post">
<H3>
  <div> What product do you want? <input type="text" name="productId">
  <input type="submit" value="submit"></div>
</h3>
</form>
<?php

if($_POST){

  $productId = $_POST['productId'];

  $query = 'select * from aca_product where product_id = "'
  . $db->quote($productId) . '"';

  $db->setQuery($query);
  $product = $db->loadObject();

  if(!empty($product)){

    echo '<h1>' . $product->name . '</h3>';
    echo '<h3>' . $product->price . '</h1>';
    echo '<img src="' . $product->image .'"/>';

  }



}
