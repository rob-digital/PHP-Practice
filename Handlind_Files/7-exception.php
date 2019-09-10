<?php

function check_size($num) {
    if ($num < 10) {
        throw new Exception("Number: $num <br> Value must exceed 10");
    }
}

try {
    check_size(5);
}
catch (Exception $e) {
    echo '<b>Size exception!</b><br>'.
    $e->getMessage().'<hr>';
}
