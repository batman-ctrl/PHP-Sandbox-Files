<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working With Files</title>
</head>
<body>
<?php

    
    # OPEN A FILE
    /*
        fopen() can be used for reading, writing or both.

        files modes:
            r: reading only, file must exist
            w: writing only, file doesnt have to exist (will make it if doesnt exist)
            a: writing only, (wont overwrite the existing file but will append)
    */
    

    $fileHandler = fopen("testing.txt","r");

    if($fileHandler){
        echo "File opened successfully!";
    }else{
        echo "Failed to open file!";
    }

    # READ FILE
    /*
        fread()
        fgets()
        fgetc()
    */
    echo "<hr>";

    # fgets()
    $fileHandler = fopen("testing.txt","r");
    if($fileHandler){
        while(($line=fgets($fileHandler))!==false){
            echo $line . "<br>";
        }
        fclose($fileHandler);
    }
    
    echo "<hr>";

    # fread()
    $fileHandler = fopen("testing.txt","r");
    if($fileHandler){
        $fileContent = fread($fileHandler, filesize("testing.txt"));
        echo $fileContent;
        fclose($fileHandler); 
    }


    echo "<hr>";

    # WRITE TO A FILE
    # fwrite()
    # fputs()
    $fileHandler = fopen("myotherfile.txt","w");
    if($fileHandler){
        fwrite($fileHandler, "Hello, this is my other file content.");
        fclose($fileHandler);
        echo "Data written to the file sucessfully!";
    }
    echo "<hr>";
    
    $fileHandler = fopen("myotherfile.txt","a");
    if($fileHandler){
        fwrite($fileHandler, "\nI am adding to this file");
        fclose($fileHandler);
        echo "Data appended to the file sucessfully!";
    }

?>    



</body>
</html>