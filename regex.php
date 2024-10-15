<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>

<?php

    /*
        Regular Expression = a sequnce of characters that we use to
        perform a search/replace/match/validate operation.

        preg_match() - looks for the pattern and tries to match
        preg_match_all() - matches all occurrences in a string
        preg_replace() - performs search and replace
    */

    // Simple word matching
    if(preg_match("/cat/","I have a cat")){
        echo "Cat found!";
    }else{
        echo "Nothing found!";
    }

    echo "<br>";

    // Character classes
    // To find digits
    if(preg_match("/\d/", "My number is 012345")){
        echo "Numbers found";
    }else{
        echo "Nothing found!";
    }

    echo "<br>";

    
    // To find letters
    if(preg_match("/\D/", "My number is 012345")){
        echo "Letters found";
    }else{
        echo "Nothing found!";
    }

    echo "<br>";

    // Anchors
    /*
        ^ - checks at the start of the string
        $ - checks at the end of a string
    */
    if(preg_match("/^th/","this is php")){
        echo "Yes starts with th!";
    }else{
        echo "Nope it does not start with th!";
    }

    echo "<br>";


    if(preg_match("/php$/","this is php")){
        echo "Yes it ends with php!";
    }else{
        echo "Nope it does not end with php!";
    }
    
    echo "<br>";


    // Quantifiers /enumeration operators
    if(preg_match("/o{2,3}/", "Hellooo")){
        echo "Repeated 'o' found!";
    }else{
        echo "Nope!";
    }

    echo "<br>";


    // Checking number format
    $number = "083-123-4567";
    if(preg_match("/\d{3}-\d{3}-\d{4}/",$number)){  
        echo "Number format correct!";
    }else{
        echo "Incorrect format!";
    }

    echo "<br>";
 

    //abbbcddd   eee
    if(preg_match("/ab{3}cd{3}\s{4}e{3}/","abbbcddd    eee")){
        echo "Matched string 1";
    }else{
        echo "No string 1 match";
    }

    echo "<br>";
 

 	//ZYYXX WW
    if(preg_match("/ZYYXX\sWW/","ZYYXX WW")){
        echo "Matched string 2";
    }else{
        echo "No string 2 match";
    }

    echo "<br>";


    //Text 123
    if(preg_match("/Text\s{1}\d{3}/","Text 123")){
        echo "Matched string 3";
    }else{
        echo "No string 3 match";
    }



?>
    
</body>
</html>