<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File To FTP Server</title>
    <style>
        *{
            font-family: 'Arial';
        }
        .container{
            background: aqua;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Upload a file to FTP Server</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select file to upload: <input type="file" name="fileToUpload"/>
        <br>
        <input type="submit" value="Upload File" name="submit"/>
    </form>

</div>

    
</body>
</html>