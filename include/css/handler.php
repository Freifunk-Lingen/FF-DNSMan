<?php

$dir = new DirectoryIterator(dirname(__FILE__));
foreach ($dir as $fileinfo) {
    if ($fileinfo->getExtension() == 'css') {
        echo '<link rel="stylesheet" href="/include/css/'.$fileinfo->getFilename().'">';
        echo "\n";
    }
}

