<?php

$filestream = fopen('poem2.txt', 'w')
or die ('Unable to open the file!');

fwrite($filestream, "Overwritten!");
fclose($filestream);