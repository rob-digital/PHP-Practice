<?php
//  Write a PHP class that sorts an ordered integer array with the help of sort() function.

class Array_sort 
{
    private $myArray;

    function __construct(array $arrayToBeSorted){
        $this->myArray = $arrayToBeSorted;
        
    }

    public function sortIt(){
        // return $this->myArray;
        // sort($sorted);
        // return $sorted;
        // foreach ($this->myArray as $value) {return $value;}
        $toSort = $this->myArray;
        sort($toSort);
        return $toSort;
    }
}

$sortArray = new Array_sort(array(11, -2, 4, 35, 0, 8, -9));

echo "<pre>";
print_r( $sortArray->sortIt()) . "<br/>";
echo "</pre>";

?>