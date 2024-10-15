<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Client</title>
    <style>
        *{
            font-family: 'Arial';
            padding: 0;
            margin:0;
            box-sizing: border-box;
        }

        body{
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background: #000;
        }

        .container{ 
            padding: 20px;
            background: #333;
            color: #fff;
        }

        h1{
            text-align: center;
        }

        .myForm form{
            margin-top: 10px;
            background: #4e4e4e;
            padding: 10px; 

            display:flex;
            flex-direction: column;
            gap:10px;
        }

        .myForm form input{
            width: 100%;
            padding: 5px;
        }

        .myForm form textarea{
            display: block;
            width: 100%;
        }

        #myButton {
            background: green;
            border: none; 
            font-size: 20px;
        }

       
    </style>
</head>
<body>
    
        <div class="container">
            <h1>Email Client</h1>
            
            <div class="myForm">
                <form method="post" action="send.php" enctype="multipart/form-data">
                    <!-- Email Field -->
                    <div>
                        <label for="toEmail">To : </label>
                        <input type="email" id="toEmail" name="toEmail" required/>
                    </div>

                     <!-- CC Field -->
                     <div>
                        <label for="toCC">CC : </label>
                        <input type="email" id="toCC" name="toCC" />
                    </div>

                    <!-- Subject Field -->
                    <div>
                        <label for="toEmail">Subject : </label>
                        <input type="text" id="subject" name="subject" required/>
                    </div>

                    <!-- Message Area -->
                    <div>
                        <label for="toEmail">Message : </label>
                        <textarea id="message" name="message"  rows="6" cols="30" required></textarea>
                    </div>

                    <!-- Attachment --> 
                    <div>
                        <label for="attachement">Attachment (Optional) : </label>
                       <input type="file" id="attachment" name="attachment"/>
                    </div>


                    <input type="submit" value="Send Email" id="myButton"/>


                </form>
            </div>

        </div>

</body>
</html>