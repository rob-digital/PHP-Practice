<?php 

$letters = array('A', 'B', 'C');
$numbers = array('1', '2', '3');

$matrix = array('Letter' => $letters, 'Number' => $numbers);

echo "<p>Start: {$matrix['Letter'][0]}</p>";

foreach($matrix as $array => $list)
{
    echo'<ul>';
    foreach($list as $key => $value)
    {echo "<li>$array [$key] = $value";}
    echo '</ul>';
}



?>