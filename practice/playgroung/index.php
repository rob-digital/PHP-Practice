<?php

require 'functions.php';
require 'Task.php';

$title = 'PHP Playground';

$nameOfExercise1 = "foreach";
$nameOfExercise2 = "Next Exercise";
$nameOfExercise3 = "Associative Array";
$nameOfExercise4 = "Ternary / Boolean";
$nameOfExercise5 = "Display object instance using a reusable function";
$nameOfExercise6 = "Display array using a reusable function";
$nameOfExercise7 = "Fetching data from the 'laracast_course' database ";
$nameOfExercise8 = "Fetching only one column entry from DB ";
$nameOfExercise9 = "interacting with DB ";
$nameOfExercise10 = "Saved from DB to PHP Class and fetched from there ";

$pdo = connectToDB();
// prepare the statement and execute
$statement = $pdo->prepare('select * from todos');
$statement->execute();

$statement2 = $pdo->prepare('select * from todos');
$statement2->execute();


// -----------------------------------------------------------------------






//------------------------------------------------
$animals = ['dog', 'cat', 'pig', 'rat'];
$animals[] = 'elephant'; // push
unset($animals[2]);  // remove from array

//-------------------------------------------------
$person = [      'age' => 38,
                'hair' => 'black',
              'career' => 'web developer'
];
$person['name'] = 'Robert'; // push
unset($person['age']);

//--------------------------------------------------
$task = [
  'who' => 'me',
  'when' => 'today',
  'completed' => true
];

// ________----------------------------------------
//dd($animals);

class Car {
    protected $name;
    protected $engine;
    protected $numOfWheels;
    protected $brandNew;

    function __construct(string $name, string $engine, int $wheels, bool $new = true)
    {
        $this->name = $name;
        $this->engine = $engine;
        $this->numOfWheels = $wheels;
        $this->brandNew = $new;
    }
}

$car1 = new Car('2.0', 4, false);

$cars = [
    $car1 = new Car('Fiat','2.0', 4, false),
    $car2 = new Car('Volvo','3.0', 4),
    $car3 = new Car('Honda','2.4', 4)
];



//dd($car1);



require 'index.view.php';