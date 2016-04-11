<?php

$path = realpath(__DIR__. '/..');

$listGlob = glob($path . '/*');

$listScan = scandir($path);

$listRecursive = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);

echo '<br />Path: ', $path;
echo '<br /><br />glob()<hr />';
echo implode('<br />', $listGlob);
echo '<br /><br />scandir()<hr />';
echo implode('<br />', $listScan);
echo '<br /><br />RecursiveDirectoryIterator<hr />';
echo implode('<br />', iterator_to_array($listRecursive));