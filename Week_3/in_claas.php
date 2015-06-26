<?php

interface ACAPaymentInterface
{
  public function submitPayment($ccNum, $expYear, $expDate, $cvv);
}

class Paypal implements ACAPaymentInterface
{
  public function submitPayment($ccNum, $expYear, $expDate, $cvv)
  {
    echo __class__ . ' payment sucessful. From ' . __function__;
  }
}

class Stripe implements ACAPaymentInterface
{
  public function submitPayment($ccNum, $expYear, $expDate, $cvv)
  {
    echo __class__ . ' payment sucessful. From ' . __function__;
  }
}

class GoogleWallet implements ACAPaymentInterface
{
  public function submitPayment($ccNum, $expYear, $expDate, $cvv)
  {
    echo __CLASS__ . ' payment sucessful. From ' . __FUNCTION__;
  }
}
?>
<form action="<?php echo($_SERVER['PHP_SELF']);?>" METHOD="POST">

<select name="PaymentType">
  <option value="Paypal">Paypal</option>
  <option value="Stripe">Stripe</option>
  <option value="GoogleWallet">GoogleWallet</option>
</select>
<input type="submit"/>
</form>
<?php

$PaymentType = isset($_POST['PaymentType']) ? $_POST['PaymentType'] : null;

if(!empty($PaymentType)) {

  $paymentObject = new $PaymentType();
  $paymentObject -> submitPayment($ccNum = 87239898332, $expYear = 15, $expDate = 3, $cvv = 345);


  // echo 'PaymentType is ' . $PaymentType;

  // echo '<pre>';
  // print_r($paymentObject);
}else{
  echo $PaymentType . ' is not sucessful!';
}

?>
