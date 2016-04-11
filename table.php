<?php

$text = 'The quick brown fox jumped over the fence. Quick as a wink he was gone.';
$textLower = strtolower($text);
$textUpper = strtoupper($text);
$textFirstWords = ucwords($text);

echo '<table border="1">';
printf('<tr><th>lowercase </th><td>%s</td></tr>', $textLower);
printf('<tr><th>UPPERCASE </th><td>%d</td></tr>', $textUpper);
printf('<tr><th>1st Letter</th><td>%d</td></tr>', $textFirstWords);
echo '</table>';

