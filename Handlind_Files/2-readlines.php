<?php

$filestream = fopen('Motto-Buddah.txt', 'r') 
or die('Unable to open file!');


while(!feof($filestream))
{echo  fgets($filestream).'<br>';}


fclose($filestream);
