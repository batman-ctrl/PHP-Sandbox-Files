<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Using a single PHP Page</title>
</head>
<body>
    
    <!-- PHP Script -->
    <?php

        $errors = array();

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $age = $_POST["age"];

            // Server Side validation 
            if(empty($name) || empty($surname)){
                $errors[] = "Please enter both fields!";
            } 

            // Email validation 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Email invalid!";
            } 

            // Age validation 
            if(!is_numeric($age)){
                $errors[] = "Not a number";
            }
 
            if(count($errors)>0){
                echo "There were some errors!";
                var_dump($errors);
            }else{
                echo "Your name is $name $surname, and your email is $email and your age is $age";
            }
        }
    ?>

    <!-- Form  -->
    <form method="post" action="">
        Name : <input type="text" name="name"/> <br>
        Surname : <input type="text" name="surname"/><br>
        Email : <input type="email" name="email"/><br>
        Age : <input type="text" name="age"/> <br>
        <input type="submit" value="Submit"/>
    </form>
 

</body>
</html>