<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions 2 </title>
</head>
<body>
    

<?php

    session_start();
 

    if(isset($_SESSION["fav_color"])|| isset($_SESSION["username"])){

        // Access the session value
        echo "My fav color is ".$_SESSION["fav_color"];
        
        
        echo "My username is ".$_SESSION["username"];


        // Unset this session value
        // unset($_SESSION["fav_color"]);
        // unset($_SESSION["username"]);
        
        // destroys session completely
        session_destroy();

    }else{
        echo "No session is set!";
    }



?>

</body>
</html>