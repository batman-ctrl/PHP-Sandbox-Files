<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caching</title>
</head>
<body>

<?php

    // To disable caching completely
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Expires: 0");

    // Cache for 1 hour
    // tell the browser to cache the page for 1 hour
    header("Cache-Control: max-age=3600");
?>
    
</body>
</html>