<?php


namespace Calc;

$first = $_POST['firstNum'];
$second = $_POST['secondNum'];

class Calc
{
    private $firstNum;
    private $secondNum;

    function __construct(int $firstNum, int $secondNum) {
        $this->firstNum = $firstNum;
        $this->secondNum = $secondNum;
    }

    public function add() {
        return $this->firstNum + $this->secondNum;
    }
    public function subtract() {
        return $this->firstNum - $this->secondNum;
    }
    public function multiply() {
        return $this->firstNum * $this->secondNum;
    }
    public function divide() {
        return $this->firstNum / $this->secondNum;
    }
}

$allNumbers = new Calc($first, $second);

if(isset($_POST['add'])) {
    $score = $allNumbers->add();
    echo $score;
    echo '<script>showname($_score) </script>';





//print_r(  $allNumbers->add());



    //echo '<a href="calculator.html">';


    //  echo header('Location: calculator.html');





}
if(isset($_POST['sub'])) {
    echo $allNumbers->subtract() .'<br>';
}
if(isset($_POST['mul'])) {
    echo $allNumbers->multiply() .'<br>';
}
if(isset($_POST['div'])) {
    echo $allNumbers->divide() .'<br>';

}