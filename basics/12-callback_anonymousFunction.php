<?php

$hello = function($user) {
    echo "Hello $user ! <br>";
};
$hello('Robert');

function greet(callable $person) {
    $person('Mister Miagi');
}
greet($hello);

echo"<br><hr><br>";
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

function meet() : callable {
    $time = 'morning';
    return function ($name ) use( &$time)
    {return "Good $time, $name!";};
}
$meeting = meet();
echo $meeting('Mickey Mouse');
?>