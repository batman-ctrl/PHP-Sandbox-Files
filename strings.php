<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    
    <?php


        echo trim("    a Hi There   hello        something");
        echo "<br>";
        echo substr("Hello World", 0,5);
        echo "<br>";
        echo strpos("Hello World", "World");
        echo "<br>";
        echo strlen("Hello");
        echo "<br>";
        // Replaces part of a string with another string
        echo substr_replace("Hello World","PHP",6);
        echo "<br>";
        echo strtoupper("php");

        echo number_format(123456.678,2);


        echo "<hr>";

        // Casting
        $number = 123;
        echo (string)$number;
        echo "<br>";

        // Strval - converts a value into a string
        echo strval(90);

        // Identity = when no conversion is needed when the variale is the already a string for e.g
        // $name = "john";
        // $value = $name;

        // Widening = when you convert a narrower type
        // e.g integer to long 

        // Narrowing - when you convert from a larger type
        // e.g float to integer
        // 34.3839o90139 to 34




        // String comparison
        // Equality     -> ==
        // Identical    -> ===
        echo "<hr>";
        $str1 = "abc";
        $str2 = "ABC";
        if($str1==$str2){
            echo "Strings are equal";
        }else{
            echo "Not equal";
        }


        



    ?>

</body>
</html>