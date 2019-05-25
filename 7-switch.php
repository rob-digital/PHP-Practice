<?php

$num = 200;
$letter = 'R';

switch ($num) {
    case 100 : 
        echo 'Checked number is 100';
        break;
    case 200 : 
        echo 'Checked number is 200';
        break;
    case 300 : 
        echo 'Checked number is 300';
        break;
    default : 
        echo 'Nuber is unrecognised!';
             
}
echo '<br><hr>';


switch ($letter) {
    case 'A' : echo 'Letter is A'; break;
    case 'B' : echo 'Letter is B'; break;
    case 'C' : echo 'Letter is C'; break;
    case 'R' : echo 'Letter is R'; break;
    default : echo 'Letter is unrecognised'; 
}
echo '<br><hr>';

switch($num) {
    case 0 : case 100 : case 200 : echo 'Number between 0 and 201'; break;
    default : echo 'Number is bigger than 200';
}


?>