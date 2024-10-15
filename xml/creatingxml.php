<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating XML Docs</title>
</head>
<body>

<?php

    //CREATING AND ADDING TEXT NODE USING CREATEELMENT
    // Creates a new DOMDocument
    $dom = new DOMDocument("1.0", "UTF-8");

    // Create a root element
    $root = $dom->createElement("notes");

    // Add child to dom
    $dom->appendChild($root);

    $note = $dom->createElement("note");
    // Add child to root element
    $root->appendChild($note);

 
    // Creating multiple child elements
    $to = $dom->createElement("to","John");
    $note-> appendChild($to);

    $from = $dom->createElement("from","Superman");
    $note->appendChild($from);


    // Save XML
    echo $dom->saveXML();



    // ADDING TEXT NODES WITH CREATETEXTNODE
    $d1 = new DOMDocument("1.0", "UTF-8");
    $message = $d1->createElement("message");
    $d1->appendChild($message);

    $text = $d1->createTextNode("Hello, this is some text");
    $message-> appendChild($text);

    $message->setAttribute("id","001");
    $message->setAttribute("type","success");



    echo $d1->saveXML();



?>

</body>
</html>