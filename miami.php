<?php

$filename = 'website_access.log';

$fh = fopen($filename, 'a+');

if ($fh) {
    
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $browser = $_SERVER['HTTP_USER_AGENT'];
    
    $today = date('Y-m-d h:i:s');
    
    fprintf($fh, "%20s | %20s | %60s\n", $ip, $today, $browser);
    
    rewind($fh);
    
    echo '<pre>';
    
    fpassthru($fh);
    
    echo '</pre>';
    
    fclose($fh);
} else {
    
    echo 'ERROR: unable to open file ' . $filename;
}

phpinfo(INFO_VARIABLES);