<?php

$poem = "\r\n\t I never saw a man who looked" ;
$poem .= "\r\n\t with such a wistful eye";
$poem .= "\r\n\t upon that little tent of blue";
$poem .= "\r\n\t which prisoners call the sky.";

$filename = 'poem.txt';

$filestream = fopen($filename, 'w')
or die('Unable to open file!');

$num = fwrite($filestream, $poem);
if ($num) {
    echo "$num bytes written to $filename";
}
fclose($filestream);