<?php

$contents = file_get_contents('http:/php.net');

echo '<pre>';

echo htmlspecialchars($contents);

// var_dump($contents);

echo '</pre>';