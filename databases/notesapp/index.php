<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
    <style>   
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
 
        *{
            font-family: 'Noto Sans',sans-serif;
            margin: 0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            height:100vh;
            display:flex;
            justify-content: center;
            align-items:center;
            background: #222;
        }

        .container{
            padding: 32px;
            background: coral; 
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            align-items: center;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap:5px; 
            width: 100%;
        }

        .container form > * {
            padding: 10px; 
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Welcome to the Notes App</h2>   
        <form action="authentication.php" method="post">
            <input type="test" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="register">Register</button>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    
</body>
</html>