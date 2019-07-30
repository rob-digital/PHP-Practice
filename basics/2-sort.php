<?php 

$cars = array('Ford' => 'Mustang', 'Volvo' => 'XC90', 'Toyota' => 'Corolla');

echo '<dl><dt>Original Order: <dd>';
foreach($cars as $key => $value)
{ echo ' &bull; ' , $key. ' ' . $value;}
echo '</dl>';


/*asort*/
asort($cars);
echo '<dl><dt>Sorted into value Order: <dd>';
foreach($cars as $key => $value)
{ echo ' &bull; ' , $key. ' ' . $value;}
echo '</dl>';


/*ksort*/
ksort($cars);
echo '<dl><dt>Sorted into key Order: <dd>';
foreach($cars as $key => $value)
{ echo ' &bull; ' , $key. ' ' . $value;}
echo '</dl>';
?>