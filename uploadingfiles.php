<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading and Reading Files</title>
</head>
<body>
    
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        // var_dump($_FILES);
        
        // We make the path
        $targetDir = "uploads/";

        $targetFileLocation = $targetDir . basename($_FILES["fileToUpload"]["name"]);

        $tempLocation = $_FILES["fileToUpload"]["tmp_name"];

        // Use built-in php function to move(copy) this
        move_uploaded_file($tempLocation, $targetFileLocation);

        // Read a text file
        $content = file_get_contents($targetFileLocation);

        // echo "File uploaded successfully!";
        echo nl2br($content);

    }
     
?>

<form method="post" enctype="multipart/form-data" >
    Select File : <input type="file" name="fileToUpload"/>
    <input type="submit" value="Upload"/>
</form>


</body>
</html>