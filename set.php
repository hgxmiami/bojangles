<?php
    
    $name = 'Hugo';
    echo $name;
    echo "\n";
    $lname = 'Giraldo';
    echo $lname;

    echo "\n";

    $a = '55';
    echo $a;
echo "\n";
    $b = '65';
    echo $b;
echo "\n";
    $c = '75';
    echo $c;
echo "\n";
 
    echo $a+$b+$c;

echo "\n";

    echo $a*$b*$c;

echo "\n";

define('HUGO', 'spoiled');
echo HUGO;

echo "\n";

define('PECK', 'juice');
echo PECK;

echo "<br />";

print($name);
print("\n");
print($lname);

echo "<br />";

echo strlen(HUGO);
echo "<br />";
echo str_repeat('-', 20);

$stringVar = "This is a string    ";
$trimmed = rtrim($stringVar);
echo "<br />";
echo strlen($stringVar);
echo "<br />";
echo strlen($trimmed);

$untrimmedString = '   This is a string with spaces on the ends.     ';
$lengthUntrimmed = strlen($untrimmedString);
$trimmedString = trim($untrimmedString);
$lengthTrimmed = strlen($trimmedString);


printf('<br />String Before -->|%s|<--', $untrimmedString);
printf('<br />String After --->|%s|<--', $trimmedString);
printf('<br />Length Before --> %d', $lengthUntrimmed);
printf('<br />Length After --> %d', $lengthTrimmed);

$text = 'The quick brown fox jumped over the fence. Quick as a wink he was gone.';
$length = strlen($text);
$pos = strpos($text, 'Quick');

echo '<table border="1">';
printf('<tr><th>String </th><td>%s</td></tr>', $text);
printf('<tr><th>Length </th><td>%d</td></tr>', $length);
printf('<tr><th>Position</th><td>%d</td></tr>', $pos);
echo '</table>';







