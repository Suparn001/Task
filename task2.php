<?php
class Vehicle
{
    public $brand;
    public $model;
    public $max_speed;

    public $type;
    public function __construct($type, $brand, $model, $max_speed)
    {
        $this->type  = $type;
        $this->brand  = $brand;
        $this->model  = $model;
        $this->max_speed  = $max_speed;

        if ($this->type == "truck") {
            $this->max_speed = 120;
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $speed = $_POST['speed'];
    $height = $_POST['height'];

    if ($type == "car" || $type == "truck") {
        $type = new Vehicle($type, $brand, $model, $speed);
        $type->getinfo();
    } else {

        echo ("Your have entered wrong type of vechile..<br>");
        echo ("You can enter only Car or Truck");
    }
}
