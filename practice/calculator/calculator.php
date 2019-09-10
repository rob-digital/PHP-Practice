<?php include 'index.php'; ?>
<?php



$first = $_REQUEST['firstNum'];
$second = $_REQUEST['secondNum'];


class Calc
 {
    private $firstNum;
    private $secondNum;
    
    function __construct(float $firstNum, float $secondNum) {
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($first == NULL || $second == NULL) {
        echo '<p align="center" style="color:red"><u><b>Please provide both numbers</b></u></p>';
        return;
    }
}

$allNumbers = new Calc($first, $second);

if(isset($_POST['add'])) {
    $score = round($allNumbers->add(), 2);
    echo "<script> showScore($score) </script>";
}
elseif(isset($_POST['sub'])) {
    $score = round($allNumbers->subtract(), 2);   
    echo "<script> showScore($score) </script>";
}
elseif(isset($_POST['mul'])) {
    $score = round($allNumbers->multiply(), 2);   
    echo "<script> showScore($score) </script>";  
}
elseif(isset($_POST['div'])) {
    $score = round($allNumbers->divide(), 2);   
    echo "<script> showScore($score) </script>";  
}




// $selected_button = isset($_POST['add']);
// if ($_SERVER ["REQUEST_METHOD"] == "POST" ) { 
//         $score = $allNumbers->add();
   
//        echo $score;
    
// }
?>

