<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Validation</title>
</head>
<body>


<?php


    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $name = $_POST["name"];
        $surname = $_POST["surname"]; 
        
        echo "Info from form : $name and $surname";
    }
    
?>

<form onsubmit="return validateForm()" method="post" action="">
    Name : <input type="text" id="name" name="name"/> <br>
    Surname : <input type="text" id="surname" name="surname"/><br>
    <input type="submit" value="Submit"/>
</form>


<script>
    function validateForm(){
        let name = document.getElementById("name").value;
        let surname = document.getElementById("surname").value;

        if(name=="" || surname==""){
            console.log("Both fields are required!");
            return false;
        } 

        return true;
    }

</script>

    
</body>
</html>