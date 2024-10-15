<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with PDO</title>
</head>
<body>

<?php


    /*
        PDO - php data objects. its  a method that gives us
        access to databases. we can use different types of databases.

    */

    // database configuration
    $host = "localhost";
    $dbname = "my_database";
    $usrname = "batman";
    $password = "12345";


    try{

        // ===  CONNECTION ===
        // create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usrname, $password);
        // set PDO error mode to exception for better error handling
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully!<br>";
        echo "<hr>";


        // == INSERT ==
        // this is a query with placeholders
        $sql = "INSERT INTO users (userName,userEmail) values (:name, :email)";
        
        // this prepares a sql statement for execution
        $stmt = $pdo->prepare($sql);

        // bind parameter to the sql query
        $stmt-> bindParam(":name",$userName);
        $stmt-> bindParam(":email", $email);
        $userName = "John Cena";
        $email = "john@cena.com";
        $stmt->execute();
        echo "New row inserted successfully!";
        echo "<hr>";


        // == INSERT MULTIPLE ROWS ==
        $usersToInsert = [
            ["userName"=>"User 1", "userEmail"=>"user1@gmail.com"],
            ["userName"=>"User 2", "userEmail"=>"user2@gmail.com"],
            ["userName"=>"User 3", "userEmail"=>"user3@gmail.com"],
        ];

        foreach($usersToInsert as $user){
            $stmt->execute([":name"=>$user["userName"],":email"=>$user["userEmail"]]);
        }

        // == READ ==
        $readQuery = "SELECT * FROM users";
        $stmt = $pdo->query($readQuery);
        $users = $stmt-> fetchAll(PDO::FETCH_ASSOC);
        foreach($users as $user){
            echo "User ID : ".$user["userId"]." Name :". $user['userName'] . " - Email :". $user["userEmail"] . "<br>";
        }

        // UPDATE
        $updateQuery = "UPDATE users SET userName= :userName WHERE userId =14";
        $stmt = $pdo->prepare($updateQuery);
        $stmt->execute([':userName'=>'John Wick']);

        // DELETE
        $deleteQuery = "DELETE FROM users WHERE userName=:name";
        $stmt = $pdo->prepare($deleteQuery);
        $stmt->execute([':name'=>'John Cena']);

        // Close connection
        $pdo = null;

    }catch (Exception $e){
        echo "Connection failed : ".$e->getMessage();
    }



?>
    
</body>
</html>