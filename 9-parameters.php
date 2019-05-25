<?php

function drink(string $tmp = "hot", string $flavour = "tea") {
   echo "Drinking $tmp $flavour<br>"; 
}

drink();
drink('iced');
drink('cold', 'lemonade');

function add(int ...$numbers) {
    $total = 0;
    foreach($numbers as $number) {$total += $number;}
    echo "<hr> Total is: $total";

}

add(1 , 2 , 3);
?>