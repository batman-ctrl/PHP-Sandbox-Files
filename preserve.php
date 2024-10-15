<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preserve PHP Data</title>
</head>
<body>
    
<?php
    // Preserve data means - keeping the user input even after the form is submitted.

    $name = "";
    $email = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
    }    
    
?>


<form method="post" action="">
    Name : <input type="text" name="name" value="<?php echo $name; ?>"/>
    Email : <input type="email" name="email" value="<?php echo $email; ?>"/>
    <input type="submit" value="Submit"/>
</form>


</body>
</html>