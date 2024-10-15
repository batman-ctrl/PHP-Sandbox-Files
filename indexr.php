<?php
$fileHandle = fopen("test.txt", "r");
if ($fileHandle) {
    while (($line = fgets($fileHandle)) !== false) {
        echo $line . "<br>";
    }
    fclose($fileHandle);
}

?>