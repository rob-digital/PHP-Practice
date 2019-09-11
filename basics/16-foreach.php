<?php

$animals = ['dog', 'cat', 'pig', 'rat'];

foreach($animals as $animal) {
    echo '<ul><li>'.$animal.'</li></ul>';
}
echo '<hr>';

foreach($animals as $animal) : ?>
<li><?= $animal; ?></li>
<?php endforeach;?>