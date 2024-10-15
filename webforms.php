<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Forms</title>
</head>
<body>

<?php


    // Creating a web form
    // action - the PHP file where the form data will be sent to
    // method - POST/GET depending on how you want to send the data


?>

    <form action="processor.php" method="post">
        Name : <input type="text" name="name"><br>
        Email : <input type="email" name="email"><br>
        <input type="submit" value="Submit"/>
    </form>
    
</body>
</html>