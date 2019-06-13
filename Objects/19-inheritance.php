<?php
class Car {
    private $model, $engine, $fuelConsumption;

    function __construct(string $m, float $e = 2.2, string $f) {
        $this->model = $m;
        $this->engine = $e;
        $this->fuelConsumption = $f;
    }

    public function getModel() {
        return $this->model; 
    }
    public function getEngine() {
        return $this->engine; 
        
    }
    public function getFuel() {
        return $this->fuelConsumption; 
    }
    // function __destruct() {
    //     echo '<hr>Object destroyed!<hr>';
    // }

}
$volvo = new Car('volvo', 2.4 , '33 mpg');
echo 'My first car was '.$volvo->getModel(). ', '.$volvo->getEngine().' liter.';


// --------------- inheritance class that derives from the Car class
class SecondCar extends Car {
    private $horses = 140;

    // function __construct(int $h = 140) {
    //     $this->horses = $h;
    // }

    // public function getHorses() {
    //     return $this->horses;
    // }
    public function speed() {
        return ($this->getEngine() * $this->horses);
    }
}

$peugeot = new SecondCar('Peugeot', 2.5 , '45mpg');

echo '<br>The power of the '.$peugeot->getModel().' is '.$peugeot->speed();


//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// ---------------------- second example
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
echo"<br><hr><br>";
class Polygon {
    private $width, $height;

    function __construct(int $w = 4, int $h = 5) {
        $this->width = $w;
        $this->height  = $h;
    }

    public function getWidth() {
        return $this->width;
    }
    public function getHeight() {
        return $this->height;
    }
}

class Rectangle extends Polygon {
    public function area() {
        return ($this->getHeight() * $this->getWidth());
    }
}

class Triangle extends Polygon {
    public function area() {
        return ($this->getWidth() * $this->getHeight() / 2) ;
    }
}

$rect = new Rectangle(20, 30);
$tri = new Triangle();
echo 'Rectangle area : ' .$rect->area().'<br>';
echo 'Triangle area : ' .$tri->area().'<br>';
?>