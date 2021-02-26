<?php

 
if ($handle = opendir('')) {	

    while (false !== ($fileName = readdir($handle))) {
        $newName = str_replace("_2","",$fileName);
        rename($fileName, $newName);
    }
    closedir($handle);
}

?>