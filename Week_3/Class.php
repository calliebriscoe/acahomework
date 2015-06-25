<?php

class Person
{

  protected $name;

  protected $age;

  protected $location;

  public function __construct($name, $age, $location)
  {
    $this ->name = $name;
    $this ->age = $age;
    $this ->location = $location;

  }


public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		$this->age = $age;
	}

public function getLocation(){
		return $this->location;
	}

	public function setLocation($location){
		$this->location = $location;
	}
}




class Texan extends Person
{
  protected $location = 'Texas';

  public function __construct($name, $age)
  {
    parent::__construct($name, $age, $this->location);

  }
}

$texanPerson = new Texan('Bob',12);

echo '<pre>';
print_r($texanPerson);
