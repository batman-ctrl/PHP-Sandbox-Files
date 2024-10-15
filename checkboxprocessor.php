<?php

    // Checkboxes (colors)
    if(isset($_POST["colors"])){

        $colors = $_POST["colors"];

        print_r($colors);
    }else{
        echo "Not selected! <br>";
    }


    // Radio group (genders)
    if(isset($_POST["gender"])){

        $selectedGender = $_POST["gender"];

        echo "<br> You are a : $selectedGender";

    }else{
        echo "Not selected! <br>";
    }


    if(isset($_POST["country"])){
        echo "<br>You selected country : {$_POST['country']}";
    }

    
    if(isset($_POST["userId"])){
        echo "<br>User ID is : {$_POST['userId']}";
    }

?>