<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book</title>
</head>
<body>
    

<?php


    // Array of contacts
    $contacts = array();

    $contacts[] = array(
        "name"=>"Bruce Wayne",
        "category"=> "Friend",
        "type"=> "Home",
        "number"=> "012 345 6789",
        "email"=> "bruce@wayne.com"
    );


    // Create a new DOMDocument
    $dom = new DOMDocument("1.0", "UTF-8");

    // Root element
    $root = $dom-> createElement("addressBook");
    $dom-> appendChild($root);


    foreach($contacts as $contactInfo){
        
        // Contact element
        $contact = $dom->createElement("contact");
        $root->appendChild($contact);
    
        // Name
        $name = $dom->createElement("name", $contactInfo["name"] );
        $contact-> appendChild($name);

        $contact->setAttribute("isDeleted","false");

    }


    echo $dom->saveXML();
?>
</body>
</html>