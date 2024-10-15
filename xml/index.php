<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML</title>
</head>
<body>

<h1>Reading XML</h1>

<?php



/*

    XML - extensible markup language.

    we use xml to store and transport data in a structured and 
    human readable way.

    2 Ways to read XML documents
    ---------------------------
    1 - DOM (document object model)
    2 - SimpleXML 

*/


    // Load the xml document
    $dom = new DOMDocument();
    $dom-> load("books.xml");

    // Get all book elements
    $books = $dom->getElementsByTagName('book');

    foreach($books as $book){
        // Get attributes
        $id = $book->getAttribute("id");

        // Get elements
        $title = $book->getElementsByTagName("title")->item(0)->nodeValue;
        $author = $book->getElementsByTagName("author")->item(0)->nodeValue;
        $year = $book->getElementsByTagName("year")->item(0)->nodeValue;

        echo "Book ID: $id <br>";
        echo "Book Title: $title <br>";
        echo "Book Author: $author <br>";
        echo "Book Year: $year <br>";
        echo "<hr>";
        
    }

    echo "<h3>Reading products</h3>";

    // 2nd Method -------------------------------------------------------------
    $xml = simplexml_load_file("products.xml");

    $products = $xml->product; 

    foreach($products as $product){

        // Retrieve attribute
        $id = $product["id"];
        $category = $product["category"];

        // Retrive values 
        $name = $product->name;;
        $price = $product->price;

        echo "Product ID:  $id <br>";
        echo "Category: $category <br>";
        echo "Name: $name <br>";
        echo "Price: $price <br>";
        echo "<hr>";

    }

?>
</body>
</html>