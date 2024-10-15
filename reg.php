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
            A regular expression is a sequence of characters that form a search paattern.
            Handled with preg_ functions such as:
            * preg_match() - performs a pattern match
            * preg_match_all() - matches all occurences in a string
            * preg_replace() - performs search and replace
            
        */

        // Simple matching
        $string = "The black cat is on the roof.";
        $pattern = "/cat/";

        if(preg_match($pattern, $string)){
            echo "Match found!";
        }else{
            echo "No match.";
        }


        echo "<br>";

        
        // Character clases
        /*
            [abc] - a,b, or c
            [0-9] - 0 to 9
            [^abc] - any except a,b,c
        */
        if(preg_match("/[0-9]/","My phone number is 123456")){
            echo "Digit found!";
        }else{
            echo "No digit found!";
        }

 
        echo "<br>";

        // Anchors
        /*
            ^ - start of a string
            $ - end of a string
        */

        if(preg_match("/^He/","Hello")){
            echo "He found!";
        }else{
            echo "No he found!";
        }

        echo "<br>";

        if(preg_match("/llo$/","Hello")){
            echo "Lo found!";
        }else{
            echo "No lo found!";
        }

        echo "<br>";

        // Quantifiers
        /*
            * - matches 0 or more
            + - matched 1 or more
            ? - matches 0 or 1 
            {n} - matches exactly n occurences

        */
        echo "<br>";

        if(preg_match("/\d{2}l/", "hello")){
            echo "Found 2 times";
        }else{
            echo "Not found!";
        }
    
    ?>
    
</body>
</html>