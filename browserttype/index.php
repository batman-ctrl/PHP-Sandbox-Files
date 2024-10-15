<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browser Type</title>
</head>
<body>

<?php

    
    // HTTP_USER_AGENT - found inside an array $_SERVER

    
    $userAgent = $_SERVER["HTTP_USER_AGENT"];
 

    if(strpos($userAgent, "Chrome")!==false){
        
        echo "You are using Chrome!";

    }else{
        echo "You are not using chrome!";
    }
?>
    
</body>
</html>