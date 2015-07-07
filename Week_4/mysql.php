Singleton

<?php

class MySqlDatabase
{
  public static $instance;

  private function __construct()
  {
    echo 'I am making a socket connection to redis...';
  }
  public static function getinstance()
  {
    if(!isset(self::$instance)){
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function runQuery($query){}
}

$db = MySqlDatabase::getinstance();
$query = 'select * from foo';
$db->runQuery($query);
