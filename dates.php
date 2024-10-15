<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    
    <?php

        
        /*
            A unix time stamp is number of seconds that has elapsed since Januaray 1st 1970. Its represented
            as a single integer.
        // */
        // $currentTime = time();

        // echo "Time is : ".$currentTime; // Integer


        function get_time(){
            $time = getTimeOfDay();

            return $time["sec"] + ($time["usec"]/1000000);
        }

        // $currentTime = get_time();

        // echo $currentTime;


        // Date arrays
        $dateArray = getdate();
        print_r($dateArray);
        $currentDate = $dateArray["month"] . " - ". $dateArray["weekday"] . " -  ".$dateArray["year"];
        echo $currentDate;



        // String-formatted dates
        // formats Unix timestamps into human-readable date strings.
        echo "<hr>";
        $formattedDate = date('Y-m-d H:i:s');
        echo "Current date in String format : $formattedDate";

        echo "<hr>";

        // Converting a string-formatted date back to a unix timestamp using strtotime() function
        $mydate = "2020-10-05 14:10:30";
        $timestamp = strtotime($mydate);
        echo $mydate;
        echo "<br>";
        echo "Unix timestamp : $timestamp";

        /*

            if(d1>d2){
                
            }

        */

        echo "<hr>";

        // Calculating elapsed time (difference between 2 unix timestamps)
        $startDate = strtotime("2024-10-01 14:10:30");
        $endDate = strtotime("2024-10-30 16:00:00");

        // Calculate difference in seconds
        $elapsedTime = $endDate - $startDate;

        $days = floor($elapsedTime / (60 * 60 * 24));

        $hours = floor(($elapsedTime % (60*60*24)) / (60*60));
        
        echo $elapsedTime;
        echo "<br>";
        echo "$days Days" ." and ". "$hours and hours";


    ?>
</body>
</html>