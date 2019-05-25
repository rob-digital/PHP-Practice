<?php

$a = $b = 5;

function modify(int $val, int &$ref) {
    echo 'passed values: ' .$val. ',' .$ref. '<br>';
    $val++;
    $ref++;
    echo "Incremented values : $val , $ref <br><hr>";
}
modify($a, $b);


echo "Stored values: $a , $b";
?>