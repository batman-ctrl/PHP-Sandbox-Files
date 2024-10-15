<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security</title>
</head>
<body>
    
<h1>Security</h1>
<?php

    /*

        The main purpose of security in web application can be summed in the following points:

        1- Confidentiality - we dont share our secret passwords with other people. 
        
        2 - Integrity - maintaning the accuracy and consistency of data & systems over its entire lifecycle
        
        3 - Authentication and Authorization - we need to verify the identify  a user and their controlling
            access to a certain resource/system.
    

        Built-in functions provided by PHP to secure our applications:


        Common functions 
        --------------------------------------------------------------------
        01 - htmlspecialchars() and htmlentites() : prevent cross-site scripting(XSS) attacks this is done
        by escaping HTML characters

        02 - filter_var() - validates and sanitizes data

        03 - password_hash() and password_verify() - securely handles password hashing and verification 
    */
    // 01 - htmlspecialchars
    $user_input = "<script>alert('ur system is compromised')</script>";
    $safe_output = htmlspecialchars($user_input);
    echo $safe_output;

    echo "<br><br><br>";

    // 02 - filter_var
    $email = "batman@gmail.com";
    if(filter_var($email, FILTER_VALIDATE_FLOAT)){
        echo "Valid email!";
    }else{
        echo "Invalid email!";
    }

    $unsafe_username = "hello<a>$3j<h1>ka hello<";
    
    $safe_username = strip_tags($unsafe_username);

    $safe_username = filter_var($safe_username, FILTER_SANITIZE_STRING);

    echo "Hello, ". htmlspecialchars($safe_username);


    /*
        - Data filtering
        - Register globals
        - Cross site scripting 
        - Command line inject

    */



    /*
        Data Filtering - process of validating and sanitizing an input to prevent security issues,
                         such as sql injetion and cross site scripting (Xss)

    */
    
    // 2 approaches:  
    // Whitelist - we assume that all the user input is invalid unless it meets a specific criteria we define.
    // Blacklist - we assume that all user input is valid unless it contains a specific invalid character/pattern
    echo "<hr>";

    // Whitelist
    function validateUsername($username){
        // Allow only letters and numbers
        if(preg_match("/^[a-zA-Z0-9]+$/",$username)){
            return true;    // valid
        }else{
            return false; // invalid
        }
    }

    function validateUsernameAgain($username){
        // Allow only letters and numbers
        if(preg_match("/[\'%&()@#]/",$username)){
            return false;    // valid
        }else{
            return true; // invalid
        }
    }

    $username = "John";
    if(validateUsernameAgain($username)){
        echo "Welcome ". htmlspecialchars($username);
    }else{
        echo "Invalid username";
    }

    echo "<hr>";

    $usernameAgain = "John#";
    if(validateUsernameAgain($usernameAgain)){
        echo "Welcome ". htmlspecialchars($usernameAgain);
    }else{
        echo "Invalid username";
    }



    // Register Globals 
    /*
        register_globals is a PHP directive that turns external variables into global variables. 
        deprecated and removed now.

        will come back to this....
    */



    // Cross site scripting
    /*
     Short form is XSS, it is loophole a security issue that allows attackers to inject malicious scripts
    into pages. 

        Some of the things these scripts can do are:
            - hijack user sessions
            - deface websites
            - redirect users to malicious websites
            - steal data
    
    */

     echo "<hr>";

    
     $name = $_GET["name"] ?? "Guest";

     // htmlspecialchars - encodes characters, prevents script execution
     echo "Hello, ". htmlspecialchars($name);

     

    //  Command line injection
    /*
        This is when attackers can inject malicious shell based commands into an application.
        This can lead to unauthorized actions on the server for example.
    */

    if(isset($_GET["file"])){
        $file = $_GET["file"];

        $command = escapeshellarg("del something.txt");
        $output = shell_exec($command);
        echo "<pre>". htmlspecialchars($output)."</pre>";
    }


?>

<form method="GET" action="">
    Name : <input type="text" name="name"/>
    File :<input type="file" name="file"/>
    <input type="submit" value="Login"/>
</form>



</body>
</html>