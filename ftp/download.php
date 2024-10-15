<?php
    
       // FTP Server details
       $ftp_server = "127.0.0.1";
       $ftp_username = "john";
       $ftp_password = "12345678";
       $ftp_directory = "files/";


       // If no file name exit 
       if(!isset($_GET["file"])){
        die("No file specified");
       }

       // If we have file name
       $file_name = $_GET["file"];

       // Download this
        
       //echo "File name : $file_name";
       // If we have a file name then we make the connection
       $ftp_connection = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
       $login = ftp_login($ftp_connection, $ftp_username, $ftp_password);

       if(!$login){
           die("Failed to login to FTP Server");
       } 



       // files/a.txt
       $file_to_download = $ftp_directory.$file_name;
        /*
            tempnam = a function in php to create a temporary file in a given directory. 
            C:\Users\sandbox\AppData\Local\Temp
            var_dump(sys_get_temp_dir());
        */
       $tempFileLocation = tempnam(sys_get_temp_dir(),"FTP");
    
       // Retrieve the file from the server
       if(ftp_get($ftp_connection,$tempFileLocation, $file_to_download, FTP_BINARY)){

            /*
                header - is a function in php that is used to send HTTP headers the browser.
                Content-Type: application/octet-stream (the broswer should hand this download/content as binary)
            */
            header("Content-Type: application/octet-stream");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Length: ".filesize($tempFileLocation));

            // Reading the file = Reads a file and writes it to the output buffer.
            readfile($tempFileLocation);

            // Delete the temp file
            unlink($tempFileLocation);

       }else{
            echo "Failed to download file!";
       }
 

       // Close the connection
       ftp_close($ftp_connection);


?>