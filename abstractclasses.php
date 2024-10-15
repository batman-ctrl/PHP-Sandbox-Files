<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Classes</title>
</head>
<body>

<?php

    /*
        Abstract class cannot be instantiated directly. it serves as a structure/blueprint
        for other classes.
    */
    abstract class Animal{
        public $name;
        public function __contruct($name){
            $this->name=$name;
        }
        abstract public function makeSound();
    }


    class Dog extends Animal{
        public function makeSound(){
            echo "Bark!";
        }
    }

    $dog = new Dog("Sam");
    $dog->makeSound();
    
        



?>
    
</body>
</html>