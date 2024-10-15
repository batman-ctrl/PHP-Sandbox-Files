<?php
    session_start();

    // Dummy data from DB
    $username = "admin";
    $password = "password123";
    

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];


    if($inputUsername===$username && $inputPassword===$password){

        // Set session variable 
        $_SESSION["username"] = $inputUsername;

        // If successfull go to dashboard
        header("Location: dashboard.php");
        exit();
    }else{
        $_SESSION["error"] = "Invalid username or password!";

        // If invalid go back to login page
        header("Location: login.php");
        exit();
    }

?>