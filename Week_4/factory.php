<?php

abstract class Car
{
  protected $model;

  public function __construct($model)
  {
    $this ->model = $model;
  }
}

class Corolla extends Car
{
}

class Camry extends Car
{
}

Class CarFactory
{
  public static function getCar($make, $model)
  {
    if($make == 'corolla'){
      return new Corolla($model);
    }elseif ($make == 'camry'){
      return new Camry($model);
    } else {
      throw new NotImplementedException($make . ' is not avaiable.');
    }
  }
}

try{
$corolla = CarFactory::getCar('corolla', 'DX');

$camry = CarFactory::getCar('camry', 'LX');

$foo = CarFactory::getCar('mazda', 'DE');


} catch (NotImplementedException $ExceptionObject){
  echo '<p style="color:red;">'. $ExceptionObject->getMessage() . '</p>'
}
?>
