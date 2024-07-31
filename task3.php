<?php
class Vehicle
{
    public $brand;
    public $model;
    public $max_speed;

    public $type;
    public function __construct($type, $brand, $model, $max_speed = null)
    {
        $this->type  = $type;
        $this->brand  = $brand;
        $this->model  = $model;
        if ($this->type == "truck") {
            $this->max_speed = 120;
        } else {
            $this->max_speed  = $max_speed;
        }
    }
    public function getinfo()
    {
        echo "<h1>Here is your Vehicle details:</h1><br>";
        echo "Vehicle Type:{$this->type}<br>";
        echo "Vehicle Brand:{$this->brand}<br>";
        echo "Vehicle Model:{$this->model}<br>";
        echo "Vehicle Speed:{$this->max_speed} kmph<br>";
    }
}


$truck = new Vehicle("truck", "da", "civic");
$truck->getinfo();
$car = new Vehicle("car", "da", "civic", 122);
$car->getinfo();
