<?php

    $host = "localhost";
    $dbname = "notesapp";
    $username = "batman";
    $password = "12345";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Connected successfully to the server.');</script>";

    } catch (Exception $e){
        echo "Connection failed : ".$e->getMessage();
        exit();
    }
      
?>
 