<?php


    if(isset($_POST["submit"])){
        
        // File name
        $fileName = $_FILES["fileToUpload"]["name"];

        // Temporary file location
        $fileLocation = $_FILES["fileToUpload"]["tmp_name"];
        
        // Check if there is a file to upload
        if(empty($fileLocation)){
            die("Upload a file please");
        }

        // FTP Server details
        $ftp_server = "127.0.0.1";
        $ftp_username = "john";
        $ftp_password = "12345678";

        // Create a connection
        $ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
        $login = ftp_login($ftp_connection, $ftp_username, $ftp_password);


        // If could not login exit the script
        if(!$login){
            die("Could not log in to the FTP server");
        }

        // files/image.png
        $pathOnFTPServer = "files/". $fileName;
        // Else if logged in
        if(ftp_put($ftp_connection, $pathOnFTPServer, $fileLocation, FTP_BINARY)){
            echo "File uploaded successfully!";
        }else{
            echo "Error uploading file.";
        }

        ftp_close($ftp_connection);


    }

    
    echo "<br><h1><a href=\"displayFiles.php\">Dashboard</a></h1>"

?>