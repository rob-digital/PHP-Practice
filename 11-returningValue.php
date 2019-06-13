<?php

function supply() :array {
    return array (75, 2.155, 'Super PHP', True);
}
$arr = supply();


foreach($arr as $something) {
    echo "Element value: $something<br>";
}
echo"<br><hr><br>";

function nums() :float {
    return 2.3 * 22;
}

$someVar =  nums();
echo "Returned value: $someVar";
// foreach($someVar as $singleElement) {
//     echo "Single element as a number: $singleElement<br>";
// }
?>