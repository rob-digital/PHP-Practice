<?php

echo 'Web server: ' .$_SERVER['SERVER_SOFTWARE']. '<br>';
echo '<br>';
echo 'this Script: ' .$_SERVER['PHP_SELF'].'<br>';

echo '<p> Host name: ' .$_SERVER['HTTP_HOST']. '</p>';
echo '<p> Request method: ' .$_SERVER['REQUEST_METHOD']. '</p>';

foreach($_GET as $key => $value)
{ echo '<hr> HTTP GET : ' .$key. '=' .$value; }

/* Add this to the brovser address field 

    http://localhost/practice/supers.php?name=Mike&language=PHP

*/
?>