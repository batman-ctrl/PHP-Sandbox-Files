<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting using Mysqli interface</title>
</head>
<body>

<h1>Connecting using mysqli interface</h1>
    
<?php

    // 0. database details
    $hostname = "localhost";
    $user = "batman";
    $password ="12345";
    $dbname = "mydb";

    // 1. creating a new mysqli object to connect to db
    $mysqli = new mysqli($hostname, $user,$password, $dbname);

    // 2. check for connection errors
    if($mysqli->connect_errno){
        // connection failed, display error
        echo "Connection failed: " .$mysqli->connect_error;
        exit();
    }

    // 3. prepare a sql statement for inserting a new student
    $stmt = $mysqli->prepare("insert into students (id,name,email) values (?,?,?)");

    // 4. bind parameters to the prepared statement
    $id = 200;
    $name = "John";
    $email = "john@gmail.com";
    
    $stmt->bind_param("iss",$id,$name,$email); // i = int, s=string 


    // 5. execute the prepared statement
    /*
    if($stmt->execute()){
        echo "New student inserted successfully! <br>";
    }else{
        echo "Error inserting student :" . $stmt->error;
    }
    */

    // 6. close the prepared statement
    $stmt->close();

    // 7. run a query to fetch all students
    $allStudents = $mysqli->query("select * from students");

    // 8. check for errors on query
    if(!$allStudents){
        echo "Query Error: ". $mysqli->error;
    }else{

        // an array of rows
        var_dump($allStudents->fetch_assoc());

        // fetch and display each student row
        while($row = $allStudents->fetch_assoc()){
            echo "ID : ". $row["id"] . " - Name: ". $row["name"] 
            . " - Email : ". $row["email"] ."<br>";
            
        }

        // frees the memory linked to the result after we are done
        $allStudents->free();
    }

    // Close the connection
    $mysqli->close();


?>


</body>
</html>