<?php

class SingletonTest
{
  private static $instance;

  Private function __construct()
  {
    Echo "I am making a connection now...";
  }

  public static function getInstance()
  {
    if(!isset(self::$instance)){
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function runQuery($query){}
}


$obj1 = SingletonTest::getInstance();
$obj2 = SingletonTest::getInstance();
$obj3 = SingletonTest::getInstance();


echo " I am here";
?>
