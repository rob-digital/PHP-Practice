<?php 

define('USER', 'Mike');
define('PETS', ['cat', 'dog', 'parot', 'panda']);

echo '<p>'. USER . ' is an animal lover</p>';
echo '<p>'. USER .' has 4 pets: ' .PETS[0]. '</p>';

echo implode(', ', PETS);
echo '<br>';
define('PLAYER', 'Messi');

echo 'How are you ' .PLAYER. '?';
echo '<br>';
echo 'You are using PHP version' .PHP_VERSION.'';
echo '<p>Running on' .PHP_OS.'</p>';
echo '' .PHP_OS.'';
?>