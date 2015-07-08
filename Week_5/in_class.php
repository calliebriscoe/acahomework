<?php

class Window
{
  protected $slideType;

  public function __construct($slideType)
  {
    $this->slideType = $slideType;
  }
  public function __toString()
  {
    return $this->slideType;
  }
  public function render()
  {
    return $this->slideType;
  }
}

class Door
{
  protected $material;

  public function __construct($material)
  {
    $this->material = $material;
  }
  public function __toString()
  {
    return $this->material;
  }
  public function render()
  {
    return $this->material;
  }
}

class Floor
{
  protected $material;

  public function __construct($material)
  {
    $this-> material = $material;
  }
  public function __toString()
  {
    return $this->material;
  }
  public function render()
  {
    return $this->material;
  }
}

class House
{
    protected $Windows = [];

    protected $Door;

    protected $Floor;

    public function __construct($Door,$Floor)
    {
      $this->Door = $Door;
      $this->Floor = $Floor;
    }

    public function setWindow(Window $Window)
    {
      $this->Windows[] = $Window;
    }


    public function buildHouse()
    {
        $return = 'The house has a ';

        foreach($this->Windows as $Window){
          $return .= $Window->render() . ' window, a ';
        }

        $return2 = $this->Door . ' door and a ' . $this->Floor . ' floor.';

        return "$return $return2";
    }

}

$door = new Door('glass');
$floor = new Floor('wooden');

$house = new House($door,$floor);

$slidingWindow = new Window('sliding');
$glassWindow = new Window('glass');
$openWindow = new Window('open');

$house->setWindow($slidingWindow);
$house->setWindow($glassWindow);
$house->setWindow($openWindow);

echo $house->buildHouse();


?>
