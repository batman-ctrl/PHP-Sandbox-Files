<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index </title>
</head>
<body>
    
<h1>Index</h1>

<?php

    $host = "localhost";
    $dbname = "testdb1";
    $username = "batman";
    $password = "12345";

    try{
        $pdo = new PDO("mysql:host=$host",$username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully to the server.<br>";

        // drop database if it exists
        $pdo->exec("drop database if exists testdb1");
        
        // create the database
        $pdo->exec("create database testdb1");
        echo "Database created successfully!.<br>";

        // select the database
        $pdo->exec("use testdb1");
    

        // create a users table
        $pdo-> exec("create table users(
            id int auto_increment primary key,
            name varchar(50) not null,
            email varchar(50) unique not null,
            created_at timestamp default current_timestamp
        )");

        // create a orders tables
        $pdo-> exec("create table orders(
            order_id int auto_increment primary key,
            user_id int,
            product_name varchar(100) not null,
            quantity int not null,
            order_date timestamp default current_timestamp,
            foreign key (user_id) references users(id)
        )");
        
        echo "Tables created successfull! <br>";



        // inserting some default users
        $users = [
            ['name'=> 'John Wick', 'email'=>'john@gmail.com'],
            ['name'=> 'Alin Wick', 'email'=>'alin@gmail.com'],
            ['name'=> 'Bob Wick', 'email'=>'bob@gmail.com'],
        ];

        
        $stmt = $pdo->prepare("insert into users(name,email) values (:name, :email)");
        foreach($users as $user){
            $stmt->execute([
                ":name" => $user["name"],
                ":email"=> $user["email"]
            ]);
        }
        echo "Inserted multiple users sucessfully! <br>";

    } catch (Exception $e){
        echo "Connection failed : ".$e->getMessage();
        exit();
    }
    



?>

</body>
</html>