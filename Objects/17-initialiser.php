<?php

class Dog 
{
    private $age;
    private $weight;
    private $colour;
    private $breed;

    public function bark() {
        echo 'WOOF! WOOF!<br>'; 
    }

    public function setValues(int $years = 2, int $weight = 25, string $paint = 'black', string $kind = 'doberman') {
       $this->age = $years;
       $this->weight = $weight;
       $this->colour = $paint;
       $this->breed = $kind;
    }

    public function getBreed() {
        return $this->breed;
    }
    public function getAge() {
        return $this->age;
    }
    public function getWeight() {
        return $this->weight;
    }
    public function getColour() {
        return $this->colour;
    }
}
//  first dog
$fido = new Dog();

$fido->setValues(5, 15, 'yellow', 'boxer');

echo 'Fido is a '.$fido->getColour().' ' .$fido->getBreed().'.<br>';
echo 'Fido is '.$fido->getAge().' years old.<br>';
echo 'Fido weights '.$fido->getWeight().' kilograms.<br>';
echo $fido->bark();

echo"<br><hr><br>";

// a second dog
$rambo = new Dog();

$rambo->setValues(7, 21, 'black and white', 'border collie');

echo 'Rambo is a '.$rambo->getColour().' ' .$rambo->getBreed().'.<br>';
echo 'Rambo is '.$rambo->getAge().' years old.<br>';
echo 'Rambo weights '.$rambo->getWeight().' kilograms.<br>';
echo $rambo->bark();
echo"<br><hr><br>";

//  a third dog
$maxi = new Dog();

$maxi->setValues(3, 12, 'ginger', 'chiwawa');

echo 'Maxi: '.$maxi->getAge(). 'yrs '.$maxi->getBreed().' .<br>';
echo 'Maxi has a lovely '.$maxi->getColour(). ' coat and weights '.$maxi->getWeight().'kg.';
echo"<br><hr><br>";

// a fourth dog - with no arguments passed to the function
$booboo = new Dog();
$booboo->setValues();
echo 'Booboo: '.$booboo->getAge(). 'yrs ' .$booboo->getBreed(). ', colour: '.$booboo->getColour().'.';
?>