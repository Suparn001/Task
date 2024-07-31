<?php
class Vehicle
{
    public $brand;
    public $model;
    public $max_speed;
    public $height;
    public $type;
    public function __construct($type,$brand, $model,$max_speed,$height)
    {
        $this->type  = $type;
        $this->height  = $height;
        $this->brand  = $brand;
        $this->model  = $model;
        $this->max_speed  = $max_speed;
    }
    public function getinfo()
    {
        echo "<h1>Here is your Vehicle details:</h1><br>";
        echo "Vehicle Type:{$this->type}<br>";
        echo "Vehicle Brand:{$this->brand}<br>";
        echo "Vehicle Model:{$this->model}<br>";
        echo "Vehicle Speed:{$this->max_speed} kmph<br>";
        echo "Vehicle Height:{$this->height} meters<br>";
    }
}


class truck extends Vehicle
{

    public $max_speed;
    public function __construct($type,$brand, $model,$height,$max_speed=120){
     parent::__construct($type,$brand, $model,$max_speed,$height);
   
        $this->max_speed = $max_speed;
    }
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $speed = $_POST['speed'];
    $height = $_POST['height'];

    if (strtolower($type) === "car") {
        $car = new truck($type ,$brand, $model, $speed, $height);
        $car->getinfo();
    } 
    elseif (strtolower($type) === "truck") {

        $truck = new truck($type,$brand,$model,$height);
        $truck->getinfo();
    } 
    else {
        echo ("Your have entered wrong type of vechile..<br>");
        echo ("You can enter only Car or Truck");
    }
}
