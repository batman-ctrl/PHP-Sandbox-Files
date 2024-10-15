<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            font-family: 'Arial', sans-serif;
        }
        h3{ 
            padding: 5px;
        }    

        div{ 
            margin-top: 5px;
            border: 2px solid;
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        a{
            background: black;
            color: red;
            padding: 5px;
        }
    </style>

</head>
<body>

<h1>You have uploaded these files</h1>

<?php
       // FTP Server details
        $ftp_server = "127.0.0.1";
        $ftp_username = "john";
        $ftp_password = "12345678";
        $ftp_directory = "files/";

        $ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
        $login = ftp_login($ftp_connection, $ftp_username, $ftp_password);

        if(!$login){
            die("Failed to login to FTP Server");
        } 


        // Get list of files in the directory
        $files = ftp_nlist($ftp_connection, $ftp_directory);

        // var_dump($files);
        // Checking if there are files in directory
        if(count($files)==0){
             die("No files exist!");
        }



        foreach($files as $file){
            $fileName = basename($file);
            echo "<div>
                    <h3> $fileName </h3>
                    <a href=\"download.php?file=$fileName\">Download</a>
                 </div>";
        }

         echo "<br><h1><a href=\"index.php\">Upload again</a></h1>"
?>

</body>
</html>