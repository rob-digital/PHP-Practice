<?php

$html = '<script>window.location="index.html"</script>';
$html = htmlspecialchars($html);
echo $html;

echo"<br><hr><br>";

$giveMe = get_html_translation_table(HTML_ENTITIES);
$giveMeAll = implode(' | ', $giveMe);
echo $giveMeAll;
?>