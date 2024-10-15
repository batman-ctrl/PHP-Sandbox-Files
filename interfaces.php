<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    
<?php

    /*
        Interface - its contract that defines methods a class must implement.

    */

    interface Movable{
        public function move();
    }

    interface Speakable{
        public function speak();
    }

    
    class Person implements Movable, Speakable{
        public function move(){
            echo "This person is walking!<br>";
        }

        public function speak(){
            echo "This person is speaking!<br>";
        }
    }

    $person = new Person();
    $person->move();
    $person->speak();

?>
</body>
</html>