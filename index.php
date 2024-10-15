<html>

    <head>
        <title>Website</title>
        <meta charset="UTF-8"/>
 
    </head>

    <body>
  

        <?php 
 

            // Boolean casting
            $age = (bool) 0;
            $height =  (bool)  0.0;
            $name =  (bool)  "";
            $list =   (bool) array();
            
            // $car1 = (bool) new Car();

            // var_dump($age);
            // var_dump($height);
            // var_dump($name);
            // var_dump($list); 


            // Inserting Strings into strings
            $stringA = "news";
            $stringB = "good";

            // echo "$stringB hello $stringA";


            // Variable variables
            $news_papers = 6;
            $string_two = "news_papers";

            // echo "Number of newspapers: ",${$string_two};


            // Regular assignment
            $a = 10;
            $b = $a;
            $b = 20;

            // echo "Value of a : $a <br>";

            // Reference assignment
            $x = 10;
            $y = &$x;
            $y = 20;
            // echo "Value of x: $x";

            // Isset
            // Check if a variable is set (exists or not)
            $name = "john";
            if(isset($name) && $name!=""){

                echo "The variable has a name!";
            }else{
                echo "The variable has nothing!";
            }
            echo "<br>";

            // Settype  
            $age = "90"; 
            echo gettype($age);
            echo "<br>";
            settype($age, "integer");
            echo gettype($age);


            
            echo "<br>";

            // Empty
            $myname = "";
            if(empty($myname)){
                echo "My Name is empty!";
            }else{
                echo "My Name is not empty!";
            }


            
            echo "<br>";

            // unset
            $myage = 20; 
            unset($myage);
            if(!isset($myage)){
                echo "Nothing is set!";
            }else{
                echo "My Age : $myage";
            }
            

            echo "<br>";


            // Type
            $number = "10";
            $integerNumber = (int) $number;
            echo gettype($integerNumber);



            // Built-in Math functions
            echo "<br>";
            echo "Sqrt of 64 : " . sqrt(64);
            echo "<br>";
            echo "Round 7.8 : " . round(7.8);
            echo "<br>";
            echo "PI : " . pi();

            // Combined operators
            $x = 49; 
            $x = $x / 7;

            $number1 = 10;
            $output = 54+$number1;

            echo "The value of x is: $output"; 


            // Incrementing and Decrementing
            echo "<br>";

            // Pre-incrementing 
            $x = 10; 
            echo "Value of X -". $x++;

            echo "<br>";

            // Post-incrementing 
            $z = 10; 
            echo "Value of Z -  ". ++$z;

            echo "<br>";

            // Pre-decrementing
            $a = 10;
            echo "Value of A -". $a--;

            echo "<br>";

            // Post-decrementing
            $b = 10;
            echo "Value of A -". --$b;

        ?>


    </body>

</html>