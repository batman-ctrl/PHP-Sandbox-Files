<?php

    if(isset($_POST["language"])){
        $language = $_POST["language"];
        
        // Set the cookie for 30 days
        setcookie("language", $language, time()+(86400*30));

        echo "Your language preference has been saved as". htmlspecialchars($language).".";
        echo "<br>";
        echo "<a href=\"welcome.php\">Go to Welcome Page</a>";

    }else{
        echo "Please select a language.";
    }


?>