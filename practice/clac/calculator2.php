
<?php



$first = $_POST['firstNum'];
$second = $_POST['secondNum'];




$allNumbers = new class {
    public function add() {
        $first = $_POST['firstNum'];
        $second = $_POST['secondNum'];
        $first + $second;
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
};

if(isset($_POST['add'], $_POST['firstNum'], $_POST['secondNum'])) {
    $score = $allNumbers->add();
//print_r(  $allNumbers->add());



   //echo '<a href="calculator.html">';
    
    
    //echo header('Location: calculator.html');
  
   

    
 
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
// echo $allNumbers->add() .'<br>';
// echo $allNumbers->subtract() .'<br>';

?>

