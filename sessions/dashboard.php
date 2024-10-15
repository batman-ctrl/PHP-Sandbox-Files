<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    

<?php
    session_start();
 
    $username = $_SESSION["username"];

    // If user has been to the login page
    if(!isset($username)){
        header("Location: login.php");
        exit();
    }

    echo "<h1>Welcome <span style=\"color:red;\">$username</span> to your dashboard!</h1>";
 
?>

<a href="logout.php">Logout</a>

</body>
</html>