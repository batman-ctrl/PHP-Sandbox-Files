<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
<h1>Cookies</h1>
<?php 

        /*

            Cookies are small pieces of data that stores on the 
            client machine.

            The browser store them. They can be used for examples to 
            store user preference, user sessions... 

        */


        // setcookie(name, value,expiry, path, domain, secure, httponly);

        // Set a cookie
        setcookie("username","John",time()+3600);
    

        // Retrieve a cookie
        if(isset($_COOKIE["username"])){
            echo "Welcome back, ". $_COOKIE["username"] . "!";
        }else{
            echo "Hello, new visitor!";
        }


        setcookie(
            "cart_items",                   // name
            "10",                           // value
            time() + (86400 * 7),           // expires in 7 days,
            "/shop",                        // path
            "mywebsite.com",                // domain   
            "HTTPS",                        // secure  (makes sure the cookie sent over https)
            true,                           // httponly (prevents javascript accessing the cookie)
        );

        // cart_items is a cookie for /shop directory of "mywebsite.com"


        // Deleting a cookie 
        // by setting a the expiration time to a past time
        // the browser will deelete the cookie
        setcookie("username", "", time()-3600);

        
        
?>
 

</body>
</html>