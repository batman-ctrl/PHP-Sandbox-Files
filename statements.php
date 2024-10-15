<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statements</title>
</head>
<body>
    
<?php
    
    // Break - used to exit a loop or switch statement

    // Switch
    $day = 10;
    switch($day){
        case 9:
                echo "Nine";
                break;
        case 10: 
                echo "Ten";
                break;
    }

    // For loop
    for($x=0; $x<10; $x++){
        echo "$x<br>"; 
        if($x==5){
            break;
        }
    }

    echo "<hr>";



    // Continue = used to skip the current iteration of a loop
    for($x=0; $x<5; $x++){
        if($x==3){
            continue;
        }
        echo "$x<br>";
    }

    echo "<br>";

    $numbers = array(1,2,3,4);

    foreach($numbers as $num){
        if($num==2){
            continue;
        }
        echo $num;
    }


    echo "<hr>";

  
    // Exit - terminates/stops execution of script
    // echo "Before exit statement";
    // exit ("Stopping this script");
    // echo "<hr>";

    // Die - does the same as exit, but it prints a message before stopping script
    // echo "Before die statement <br>";
    // die(errorMessage());
    // echo "This line will not run";


    // Nested loops - its a loop inside another loop
    for($x=1; $x<3; $x++){
        for($y=1; $y<3; $y++){
            echo " $x $y";
        }
    }

    






?>


</body>
</html>