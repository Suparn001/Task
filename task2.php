<?php
class car 
{
    public $cbrand;
    public $cmodel;
    public $cmax_speed;
    public $cheight;

    public function __construct($cbrand,$cmodel,$cmax_speed,$cheight){
     
        $this->cheight  = $cheight;
        $this->cbrand  = $cbrand;
        $this->cmodel  = $cmodel;
        $this->cmax_speed  = $cmax_speed;
}
public function getinfo(){
    echo "<h1>Here is your Car details:</h1><br>";
    echo "Car Brand:{$this->cbrand}"."<br>";
    echo "Car Model:{$this->cmodel}"."<br>";
    echo "Car Speed:{$this->cmax_speed} kmph"."<br>";
    echo "Car Height:{$this->cheight} meters"."<br>";
}
}

class truck 
{
    public $theight;
    public $tbrand;
    public $tmodel;
    public $tspeed;

    public function __construct($tbrand,$tmodel,$theight,$tspeed = 120){
        $this->theight  = $theight;
        $this->tbrand  = $tbrand;
        $this->tmodel  = $tmodel;
        $this->tspeed = $tspeed;
    }
public function getinfo(){
    echo "Here is your Truck details:<br>";
    echo "Truck brand:{$this->tbrand}"."<br>";
    echo "Truck Model:{$this->tmodel}"."<br>";
    echo "Truck Speed:{$this->tspeed} kmph"."<br>";
    echo "Truck Height:{$this->theight} meters"."<br>";
}
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{   
    $type = $_POST['type'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $speed = $_POST['speed'];
    $height = $_POST['height'];

if(strtolower($type)=== "car")
{
    $car = new car($brand,$model,$speed,$height);
    $car->getinfo();
}

elseif(strtolower($type)==="truck"){
   
    $truck = new truck($brand,$model,$height);
    $truck->getinfo();
}

else{
    echo ("Your have entered wrong type of vechile..<br>");
    echo ("You can enter only Car or Truck");
}
}
?>