<?php

// using "f" family

$filename = 'gettysburg.txt';

$fh = fopen($filename, 'r');

if ($fh) {
    
    $contents = ' ';
    
    while (!feof($fh)) {
    
        $contents .= fread($fh, 1024);
        
    }
    
    fclose($fh);
    
} else {
    
    $contents = 'ERROR: unable to pen file ' . $filename;
}

echo htmlspecialchars($contents);


