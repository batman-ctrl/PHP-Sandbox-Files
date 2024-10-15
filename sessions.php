<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    

<?php

    /*
        Sessions allow us to store data across different pages of a website. 
        This means the data is persistent thoughtout the users visit. 

        
    */

    // Start a session
     session_start();
 
    // Set a session value
    $_SESSION["fav_color"] = "Blue";
    $_SESSION["username"] = "John12345";

    echo "Session data is set.";
?>


<a href="sessions2.php"> Go to Next page</a>


</body>
</html>