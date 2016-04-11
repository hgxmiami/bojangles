<?php

$text1 = 'The quick brown fox jumped over the fence. Quick as a wink he was gone.';

$text2 = str_replace('wink', 'turtle', $text1);

$textSlow1 = str_replace('quick', 'slow', $text2);
$textSlow2 = str_ireplace('quick', 'slow', $text2);
$pos = strpos($text2, 'Quick');

$string1 = trim(substr($text2, 0, $pos));
$string2 = trim(substr($text2, $pos));

$newText = str_ireplace('quick', 'slow', $string1). ' ' .ucfirst(str_ireplace('quick', 'slow', $string2));

echo '<table border="1">';
echo "<tr><th>Original </th><td>$text1</td></tr>";
echo "<tr><th>Turtle </th><td>$text2</td></tr>";
echo "<tr><th>1st Replace</th><td>$textSlow1</td></tr>";
echo "<tr><th>2nd Replace</th><td>$textSlow2</td></tr>";
echo "<tr><th>Position Quick</th><td>$pos</td></tr>";
echo "<tr><th>String 1</th><td>$string1</td></tr>";
echo "<tr><th>String 2</th><td>$string2</td></tr>";
echo "<tr><th>New Text</th><td>$newText</td></tr>";
echo '</table>';


