<!DOCTYPE html>
<html>
<head>
    <title>Upload File to FTP</title>
</head>
<body>
    <h2>Upload a file to FTP server</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
