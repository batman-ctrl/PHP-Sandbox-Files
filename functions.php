<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
<?php


    // My Global Variable
    $globalVariable = 10;


    // Built-in functions
    // echo
    // include
    // phpinfo


    // User-defined functions 


    // Defining functions    
    function p($text){
        echo "<p style=\"border: 1px solid red; padding:5px;\">$text<p>";
    }

    function greet($name){
       p($name);
    }

    function saySomething(){
        p("Hi there!");
    }

    function addTheseNumbers($a,$b){
        $hello= "hello";
        return $a+$b;
    }
 
    // Calling function
    greet("John");              // function with arguments
    saySomething();             // void function
    p(addTheseNumbers(1,2));    // returning functions



    // Variable scope
    // Global and local - global accessible anywhere, but local only inside function
    function GetGlobalVariable(){
        global $globalVariable;

        echo $globalVariable;
    }

    GetGlobalVariable();




    // Static variables
    /*
        Also known as class variables
    */

    function counter(){
        static $count = 0;
        $count++;
        p($count);
    }

    counter();
    counter();


?>
</body>
</html>