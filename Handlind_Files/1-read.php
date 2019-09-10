<?php

$filestream = fopen('Motto-Buddah.txt', 'r') 
or die('Unable to open file!');

echo fread($filestream, filesize('Motto-Buddah.txt'));

fclose($filestream);
