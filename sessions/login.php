<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>
    <?php
        session_start();

        if(isset($_SESSION["error"])){
            
            echo "<p style=\"color:red;\">{$_SESSION["error"]}</p>";

            unset($_SESSION["error"]);
        }
    
    
    ?>

    <form action="authenticate.php" method="post">
        Username : <input type="text" name="username" id="username" required ><br>
        Password : <input type="password" name="password" id="password" required ><br>
        <input type="submit" value="login"/>
    </form>

</body>
</html>