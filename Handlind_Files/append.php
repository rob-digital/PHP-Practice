<?php

$info = "\r\n\r\n\t The Ballad of Reading Gaol";
$info .= "\r\n\t\t\t Oscar Wilde 1898";


$filename = 'poem.txt';
$filesize = filesize($filename);

$filestream = fopen($filename, 'a')
or die('Unable to open file!');

$filestream2 = fopen($filename, 'r')
or die('Unable to open file!');

$num = fwrite($filestream, $info);
//$num2 = fread($filestream2, filesize($filename));
if ($num) {
    echo "$num bytes appended to $filename<br>";
    echo "$num + $filesize =" .($num + $filesize). "<br>";
}
fclose($filestream);
