<?php

    session_start();
    require 'config.php';


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        if(isset($_POST["register"])){
           // registration logic
            $username = $_POST["username"];
            $password = password_hash($_POST["password"],PASSWORD_BCRYPT);

            try{
                $stmt = $pdo->prepare("insert into users(username,password) values (:username, :password)");
                $stmt->execute(["username"=>$username, "password"=>$password]);
                echo "<script>
                        alert('Registration successful! Please login.');
                        window.location.href='index.php';
                    </script>";
            }catch(Exception $e){
                echo "<script>alert('Registration failed: ".$e->getMessage()."');</script>";
            }

        }elseif (isset($_POST["login"])){
            // login logic
            $username = $_POST["username"];
            $password = $_POST["password"];

            $stmt= $pdo->prepare("select * from users where username=:username");
            $stmt->execute(["username"=>$username]);
            // got the user
            $user = $stmt->fetch();

            // comparing hash values
            if($user && password_verify($password, $user["password"])){
                $_SESSION["user_id"] = $user["id"];
                // go to dashboard/page 
                echo "<script>window.location.href='notes.php'</script>";
            }else{
                echo "<script>
                        alert('Invalid username or password.');
                        window.location.href='index.php';
                    </script>";
            }


        }
    }


?>