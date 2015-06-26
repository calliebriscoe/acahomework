<?php

interface CacheInterface
{
  public function get($key);

  Public function set($key, Val);
}


Class Memcache implements CacheInterface
{
  public function get($key);
  {
    return $key . ' from Memcache';
  }
  public function set($key, $val);
  {
    return 'set '. $val . 'to Memcache under ' . $key;
  }
}

Class Rediscache implements CacheInterface
{
  public function get($key);
  {
    return $key . ' from Rediscache';
  }
  public function set($key, $val);
  {
    return 'set '. $val . 'to Rediscache under ' . $key;
  }
}

?>
