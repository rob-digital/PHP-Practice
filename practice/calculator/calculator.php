<?php include 'index.php'; ?>
<?php



$first = $_REQUEST['firstNum'];
$second = $_REQUEST['secondNum'];


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
    echo "<script> showScore($score) </script>";
}
elseif(isset($_POST['sub'])) {
    $score = $allNumbers->subtract();   
    echo "<script> showScore($score) </script>";
}
elseif(isset($_POST['mul'])) {
    echo $allNumbers->multiply();   
}
elseif(isset($_POST['div'])) {
    echo $allNumbers->divide();   
}




// $selected_button = isset($_POST['add']);
// if ($_SERVER ["REQUEST_METHOD"] == "POST" ) { 
//         $score = $allNumbers->add();
   
//        echo $score;
    
// }
?>

