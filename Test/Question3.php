<?php

$questions = array('Hypertext Preprocessor', 'objects are the things you think about first in designing a program and they are also the units of code that are eventually derived from the process', 'a class is an extensible program-code-template for creating objects');

$styleInner = 'style= "float: left; width: 1000px; border: 1px solid black; text-align: center;"';
$styleOuter = 'style= "float: left; width: 1000px;"';

echo "<div $styleOuter>";

for ($x = 0; $x < 3; $x++) {
    echo "<div $styleInner>";
    echo $questions[$x];
    echo '</div>';
    echo PHP_EOL;
    
}

echo '</div>';