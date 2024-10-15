<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Language</title>
</head>
<body>
    
<h2>Select Your Preffered Language</h2>

<form action="set_language.php" method="post">
    <label>
        <input type="radio" name="language" value="English" checked>English    
    </label> <br>

    <label>
        <input type="radio" name="language" value="Spanish" >Spanish    
    </label> <br>

    <label>
        <input type="radio" name="language" value="French" >French    
    </label> <br>

    <input type="submit" value="Save Preference"/>
</form>


</body>
</html>