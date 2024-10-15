
<?php

$language = "English";

// Check if the language is set
if(isset($_COOKIE["language"])){
    $language = $_COOKIE["language"];
};

$messages = array(
    "Spanish" => "Bienvenido a nuestro sitio web",
    "French" => "Bienvenue sur notre site Internet",
    "English"=> "Welcome to our website"
);


echo "<h1> $messages[$language]</h1>";
echo "<p>Your selected language is: $language</p>";
echo "<a href=\"language_form.php\">Change Language Preference</a>";


?>
 