<?php

class FootballPlayer implements CanDoTricks
{
    protected $id;
    private $name;
    private $age;
    private $position; 
    private $teamName;
    private $strongKick;
    private $hisOwnSalary;
    
    public static $baseSalary = 25000;
    public static $number_of_players = 0;

public function run() {
    return  'runs fast';
}


function __construct( string $name, int $age, string $position, string $team, int $kick, int $wage) {
    $this->id = rand(1, 10000);
    $this->name = $name;
    $this->age = $age;
    $this->position = $position;
    $this->teamName = $team;
    $this->strongKick = $kick;
    $this->hisOwnSalary = $wage;

    FootballPlayer::$number_of_players++;
}

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getPosition() {
        return $this->position;
    }
    public function getTeamName() {
        return $this->teamName;
    }
    public function getStrongKick() {
        return $this->strongKick;
    }
    public function kick() {
        return 'kicks with power of ' . $this->strongKick;
    }
    public function countWage() {
        return $this->hisOwnSalary;
    }

    function __toString() {
        return 'Player id '.$this->getId(). ' is ' .$this->getName().'.<br>'.
         'He is ' .$this->getAge(). ' years old, and plays for ' .$this->getTeamName(). ' as a ' .$this->getPosition(). '.<br>' .
         'He ' .$this->run(). '. And ' .$this->kick(). '.<br>'.
         'He earns £' .(FootballPlayer::$baseSalary + $this->countWage()). ' a year<br><br>'.
         'Number of players ' .FootballPlayer::$number_of_players.
         '<hr>';
    }
    function trick() {
        echo $this->getName() .' can bounce the ball 100 times with his head.';
    }
}

// polymorphism
interface CanDoTricks {
    public function trick();
}
// other type of polymorphism
function someTricks(CanDoTricks $person){
   return $person->trick();
}


// >>>>>>>>> Inheritance >>>>>>>>>>>>>>>>>>
class SuperPlayer extends FootballPlayer implements CanDoTricks {
    public function run() {
        return  'runs faster';
    }
    function trick() {
        echo $this->getName() .' can play with 5 balls in the same time.';
    }
}

// object 1
$ronaldo = new FootballPlayer( 'Ronaldo', 30, 'midfielder',  'Juventus', 8, 1000000);
echo $ronaldo;
echo $ronaldo->trick();
someTricks($ronaldo);

// object 2 - inheritance
$player2 = new SuperPlayer('Messi', 28, 'attacker',  'Barcelona', 9, 2000000);
echo '<hr>';
echo $player2;
$player2->trick();
someTricks($player2);

$aserghghg = 'fsfs';
$sdsd      = '343434';
