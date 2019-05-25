5<?php 

/*producing array and dislaying by foreach*/
$days = array('Monday', 'Tueaday','Wednesday');
foreach($days as $value) {echo "&bull; $value";}

$months = array('jan' => 'January',
                'feb' => 'February',
                'mar' => 'March');

echo '<dl>';
foreach($months as $key => $value)
{echo "<dt>$key<dd>$value";}
echo '</dl>';


/* implode  function  - converting array to string */
$days2 = array('Monday', 'Tueaday','Wednesday', 'Thursday');
$csv_list = implode(',', $days2);
echo $csv_list;
?>