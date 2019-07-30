<?php
echo"<br><hr><br>";

interface Shape {
    public function area();
}

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

class Rectangle extends Polygon implements Shape {
    public function area() {
        return ($this->getHeight() * $this->getWidth());
    }
}

class Triangle extends Polygon implements Shape {
    public function area() {
        return ($this->getWidth() * $this->getHeight() / 2) ;
    }
}

function getArea(Shape $shape) {
    return $shape->area();
}

$rect = new Rectangle(20, 30);
$tri = new Triangle();
echo 'Rectangle area : ' .getArea($rect).'<br>';
echo 'Triangle area : ' .getArea($tri).'<br>';
?>