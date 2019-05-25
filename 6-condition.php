<?php

$zero = 0; $a = NULL; $b = 8; $c = 'PHP is Fun';

$verb = ($b == 1) ? 'is' : 'are';
echo 'There ' .$verb. ' ' .$b. '<hr>';
echo '<br>';
$parity = ($b % 2 != 0) ? 'odd' : 'even';
echo "$b is $parity<hr>";


$result = $a ?? $b ?? $c ?? $zero;
echo "abcd : $result <br>";

$result = $zero ?? $c ?? $b ?? $a;
echo "dcba : $result<hr>" ;


date_default_timezone_get('UTC');
echo date('H:i:s');
/**/
?>