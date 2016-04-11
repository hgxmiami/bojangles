<?php

include './regex_test.php';

$testArray = array('This website rocks!', 
  'This site is totally awesome!',
  'Some people really like this blog.',
  'Awesome is a word I would use to describe this article!');

$banner = 'hello im bored, lets go rob a 7-11..."awesome"';

$pattern = '/awesome/';

echo test($banner, $pattern, $testArray);

$banner = 'how to find a word regardless of UPPER or lowercase <br />this pattern is the same as above, but uses the "i" modifier';
$pattern = '/awesome/i';
echo test ($banner, $pattern, $testArray);

$banner - 'how to find a list of words in a sentence <br /> this pattern looks for the occurrence of two words: "awesome" and/or "rocks" <br />"|" = logical or ';

$pattern = '/awesome|rocks/i';
echo test($banner, $pattern, $testArray);



