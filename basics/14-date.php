<?php

echo 'Today\'s date: '.date('jS M  Y'). '<br>';
echo 'Today\'s day: '.date('l') ;

echo"<br><hr><br>";

echo 'Time: '.date('h:i:s a'). '<br>';
echo 'Server Timezone: '.date_default_timezone_get() ;

    echo"<br><hr><br>";

date_default_timezone_set('Europe/London');
echo 'Timezone now: '.date_default_timezone_get(). '<br>' ;
echo 'Time: '.date('h:i:s a'). '<br>';

echo"<br><hr><br>";
?>