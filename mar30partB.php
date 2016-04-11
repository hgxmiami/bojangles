<?php

$filename = 'city_rates.csv';

$fh = fopen($filename, 'r');
if ($fh) {
    
    $rates = array();
    
    while (!feof($fh)) {
        
        $rates[] = fgetcsv($fh);
    }
    fclose($fh);
} else {
    $contents = 'ERROR: unable to open file ' . $filename;
    
}

echo "<h1>California USA Tax Rates </h1><hr /> \n";
echo "<table border=1 width= '75%'> \n";
foreach ($rates as $city) {
    
    echo "<tr><td width= '40%'>\n";
    echo implode('</td><td>', $city);
    echo "</td></tr>\n";
}
echo "</table>\n";

