<?php

$number = 1;
echo "Global number is: $number<br>";

function show_local() {
    $number = 100; 
    echo "Local number is : $number<hr>";
}

show_local();

function recur() {
    global $number;
    static $letter = 'A';
    
    if ($number < 10) {
        echo "$number:$letter | ";
        $number++;
        $letter++;
        recur();
    }
}
recur();

echo "<hr>Global number:  $number ";

?>