<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php

        // Arrays = used to store multiple values in a single variable

        // $fruits = ["apple","mango","kiwi"];
        // $numbers = array(1,2,3,4,5,6);

        // $users = [
        //     "user1"=> "John",
        //     "user2"=> "Sam"
        // ];

        // // Get a value from an array
        // echo $fruits[1];        
        // echo "<hr>";
        
        // $numbers2 = range(5,10);
        // var_dump($numbers2);
        // echo "<hr>";


        // // Array built-in functions
        // // Array_chunk - splits an array
        // $numbers = [1,2,3,4,5,6,7];
        // print_r(array_chunk($numbers,2));
        // // output -> [[1,2],[3,4],[5,6],[7]]
        // echo "<br>";

        // $fruits = ['apple','banana','organge','mangoe'];
        // print_r(array_chunk($fruits,2));
        // // output -> [[apple, banana], [orange,mango]]


        // echo "<br>";


        // // Array_fill - fills an array with some value
        // $myarray = array_fill(0,5,"my value");
        // print_r($myarray);
        // echo "<br>";


        // // Array_merge - combines/mergers two or more arrays
        // $array1 = ["red","blue"];
        // $array2 = ["green","yellow"];
        // print_r(array_merge($array1,$array2));
        
        // echo "<br>";


        // // Sort
        // $mynumbers = [4,1,9,3,15,2];
        // sort($mynumbers);
        // print_r($mynumbers);

        // echo "<br>";

        // // Looping 
        // $myarray1 = ['apple','banana','orange','mango'];
        // // For
        // for($x=0; $x<count($myarray1); $x++){
        //      echo $myarray1[$x]."<br>";
        // }

        // echo "<br>";

        // // Foreach
        // foreach($myarray1 as $fruit){
        //     echo $fruit . "<br>";
        // }


        // While loop
        $a = ["name"=> "John", "age"=>90];

        // list ()
        // each()

        // while(list($key, $value) = each($a)){
        //     echo "$key : $value ";
        // }


        // Removing elements
        $b = ["apple","banana","kiwi"];
        unset($b[1]);
        echo "<br>";
        print_r($b);


        echo "<br>";

        // Current, Next, Prev, Reset Functions
        $c = ["apple","banana","kiwi"];

        // returns the current(first) element of the array 
        echo current($c);
        echo "<br>";

        // returns the next element of the array 
        echo next($c);
        echo "<br>";
        echo current($c);

        // returns the prev
        // echo prev($c);
        // echo "<br>";

        // reset  
        reset($c);
        echo "<br>";
        echo current($c);
        

        echo "<hr>";

        // Multi-dimensional arrays
        $my2dArray = array(
            array("john","wick","superman"),
            array("bruce","wayne","batman"),
            array("max","max","the flash"));
 

        foreach($my2dArray as $row){
            echo "<br>";
            foreach($row as $col){
                echo $col ."<br>";
            }
        }

        echo "<hr>";

        $my2dNumbers = [[1,2],[3,4]];

        foreach($my2dNumbers as $row){
            echo "<br>";
            foreach($row as $col){
                echo $col . "<br>";
            }
        }

    ?>

</body>
</html>