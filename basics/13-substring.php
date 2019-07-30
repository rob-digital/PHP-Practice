<?php

$str = 'SQL in easy steps features SQL queries!';
echo "$str<br> 'SQL' Count: " .substr_count($str, 'SQL');

echo '<hr>Index 27: ' .substr($str, 27);
echo '<hr>Index 4 Length 13: '. substr($str, 4, 13);

$sub = 'PHP & MySQL';
$str = substr_replace($str, $sub, 0, 3);
echo "<hr>'$str'";


?>