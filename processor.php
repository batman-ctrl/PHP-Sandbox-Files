<?php

    if(isset($_POST["name"]) || isset($_POST["email"])){
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "Your name is $name and your email is $email!";
    }

?>