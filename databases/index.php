<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to DB - Method 1</title>
</head>
<body>
    
<h1>Mysqli Method</h1>

<?php

/*  
     MYSQLi - my sql improved. it gives us the ability to interact with 
     MYSQL databases. 

*/

    // Database details
    $host = 'localhost';
    $username = 'batman';
    $password = '12345';
    $database = 'mydb';

    // create a new MySqli object
    $mysqli = new mysqli($host, $username, $password, $database);

    // check the connection
    if($mysqli->connect_error){
        die("Connection failed (".$mysqli->connect_errono.')');
    }

    echo "Connected successfully using MySqli!";

    // Close connection
    $mysqli->close();
?>

<h1>PDO Method</h1>
<?php

/*  
    PDO - php data objects. unlike mysqli which is specific for mysql,
    PDP will swork with many other database systems like SQLite, oracle,
    postgresql, and more...

*/


    // database details
    $phost = 'localhost'; 
    $pdatabase = 'mydb';

    try{
        // create new PDO instance 
        $cs = "mysql:host=$phost;dbname=$pdatabase";
        $pdo = new PDO($cs, "batman","12345");

        // setting error mode to exception for better error handling
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        echo "Connected successfully using PDO";


    }catch (Exception $e){
        echo "Connection failed: ". $e->getMessage();
    }


    /*

        When to use which?
        - use sqli object if 
        : you know you will only work with mysql databases
        : you prefer using mysql specific features

        - use pdo if
        : you want to use multipld database systems
        : you prefer more flexible and better error handling

    */


    /*
        MySqli functions summary:
        1. mysqli_connect_errno()- checks if there was an error 
        2. mysqli_connect_error() - gets the error message from the last connection attempt
        3. error (e.g $mysqli->error) - displays the most recent error
        4. query() - sends a query to the database 
        5. fetch() - gets the values from the database
        6. prepare() - prepares an sql statement for execution
            e.g $stmt= $mysqli->prepare($sql);
            
        7. bind_param - binds parameters to variables 
        8. bind_result  - binds parameters to get results of a prepared statment
        9. execute() - runs a prepared statment
        10. close() - close connection

        PDO functions summary: (simlar functions to mysqli) but with these:
        1. setAttribute - setts error modes
        2. exec - executes ps when no result
        3. getMessage - gets the error message from exception
    */



?>






</body>
</html>