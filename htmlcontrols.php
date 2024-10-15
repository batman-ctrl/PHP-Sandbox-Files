<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Controls</title>
</head>
<body>
    
<?php

    // Text fields - allows you to insert a single line of text (string,digits, email etc)'
 
?>


        <form>
            <!-- Text Fields -->
            Name : <input type="text" name="name" placeholder="Enter your name"> <br>
            Email : <input type="email" name="email" placeholder="Enter your email" required><br>
            Password : <input type="password" name="password" placeholder="Enter your password"></br>
            <input type="submit" value="Send"/>

            <br>
            <!-- Text Area -->
            Comments: <textarea name="comments" cols="30" rows="5">This is something inside</textarea><br>
        </form>


        <!-- Checkboxes -->
        <form method="POST" action="checkboxprocessor.php">
            <div>
                <input type="checkbox" name="colors[]" value="Red"> Red <br>
                <input type="checkbox" name="colors[]" value="Blue"> Blue <br>
                <input type="checkbox" name="colors[]" value="Green"> Green <br>
            </div>
            <input type="submit" value="Send Values"/>
        </form> 


        <!-- Radio Boxes -->
        <form method="POST" action="checkboxprocessor.php">
            <div>
                <input type="radio" name="gender" value="Male"> Male <br>
                <input type="radio" name="gender" value="Female"> Female <br> 
            </div>
            <input type="submit" value="Send Values"/>
        </form> 


        <!-- Dropdown (comboboxes) -->
        <form method="POST" action="checkboxprocessor.php">
            Choose a country:
                <select name="country" >
                    <option value="">Please select a country</option>
                    <option value="RSA">South Africa</option>
                    <option value="ZAM">Zambia</option>
                    <option value="NEW">New Zealand</option>
                </select><hr>
                <input type="submit" value="Select Country"/><br>
                <input type="reset" value="Reset"/><br>

                <input type="button" value="Save"/><hr>
        </form>

        <!-- Hidden controls -->
        <!-- used to store information that is not visible to the user -->
        <form method="POST" action="checkboxprocessor.php">
            <input type="hidden" name="userId" value="123456"/>
            <input type="submit" value="Submit"/>
        </form>

</body>
</html>