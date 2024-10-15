<?php

    if(isset($_GET["local"])){
        header("Location: localpage.php");
    } 
    
    if(isset($_GET["google"])){
        header("Location: http://www.google.com");
    } 
    
?>