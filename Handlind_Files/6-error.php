<?php

function error_handler($level, $message) {
    switch ($level) {
        case 2 : $str  = 'Warning! - case 2'; break;
        case 8 : $str  = 'Notice! - case 8 '; break;
        default : $str = 'Error!';

    }
    echo "<b>$str</b><br>$message<hr>";
}

set_error_handler('error_handler');

// case 8
echo ($var);

// case 2
$file = fopen('gfdfgd.txt', 'r');

$number = 2;
if ($number >= 1) {
    trigger_error('Value must be 1 or less');
}

$arr = array(1, 3, 'wewe', 'dsdsd');
print_r($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
