<?php

$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');

$styleInner = 'style= "float: left; width: 100px; border: 1px solid black; text-align: center;"';
$styleOuter = 'style= "float: left; width: 700px;"';

echo "<div $styleOuter>";

for ($x = 0; $x < 5; $x++) {
    echo "<div $styleInner>";
    echo $days[$x];
    echo '</div>';
    echo PHP_EOL;
    
}

echo '</div>';