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

    public function setBreed(string $kind) {
        $this->breed = $kind;
    }
    public function setAge( int $years){
        $this->age = $years;
    } 
    public function setWeight(int $kg) {
        $this->weight = $kg;
    }
    public function setColour(string $fur) {
        $this->colour = $fur;
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

$fido = new Dog();

$fido->setBreed('labrador');
$fido->setAge(7);
$fido->setWeight(38);
$fido->setColour('brown');

echo 'Fido is a '.$fido->getColour().' ' .$fido->getBreed().'.<br>';
echo 'Fido is '.$fido->getAge().' years old.<br>';
echo 'Fido weights '.$fido->getWeight().' kilograms.<br>';
echo $fido->bark();

echo"<br><hr><br>";

$rambo = new Dog();

$rambo->setBreed('labradoodle');
$rambo->setAge(3);
$rambo->setWeight(26);
$rambo->setColour('creamy');

echo 'Rambo is a '.$rambo->getColour().' ' .$rambo->getBreed().'.<br>';
echo 'Rambo is '.$rambo->getAge().' years old.<br>';
echo 'Rambo weights '.$rambo->getWeight().' kilograms.<br>';
echo $rambo->bark();
echo"<br><hr><br>";
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> anonymous class >>
$anonym = new class {
    public function logTest($s) {
        echo $s;
    }
};

$anonym->logTest('this is a data test for an  anonymous class<br>
it shows how to use an anonymous class.');
?>