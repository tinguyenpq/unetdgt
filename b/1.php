<?php

// your folder name, here I am using templates in root
$directory = '';
foreach (glob($directory."*.mp3") as $filename) {
    $file = realpath($filename);
    //var_dump($file);
    rename($file, str_replace("_2","",$file));
}

?>