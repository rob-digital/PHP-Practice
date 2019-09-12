<?php

$animals = ['dog', 'cat', 'pig', 'rat'];

foreach($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}
echo '<hr>';

foreach($animals as $animal) : ?>
<li><?= $animal; ?></li>
<?php endforeach;?>