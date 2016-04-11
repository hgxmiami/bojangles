<?php

$array1 = range(0, 99, 10);
var_dump($array1);
echo '<br />';

$arrayAssoc = array('What does PHP stand for?' => 'Hypertext Preprocessor', 'What is an object' => '', 'What is a class'=> 'a class is an extensible program-code-template for creating objects');
var_dump($arrayAssoc);
echo '<br />';

$arrayNumeric = array();
$arrayNumeric[1] = 22;
$arrayNumeric[] = 18;
$arrayNumeric[] = 197;
var_dump($arrayNumeric);
echo '<br />';

//arrays displayed in key value pairs....var_dump
//or they can be assigned like below
$array3 = array(1, 2, 3, 4, 5, 6, 7);
$array4 = array(2, 4, 6, 8);
echo '<br /><br />3: ', var_dump($array3);
echo '<br /><br />4: ', var_dump($array4);

echo '<br /><br />Difference:', var_dump(array_diff($array3, $array4));

// var_dump(array_diff($array3, $array4));



