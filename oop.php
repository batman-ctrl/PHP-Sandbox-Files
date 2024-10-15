<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php

        function p($text){
            echo "<p style=\"border: 1px solid red; padding:5px;\">$text<p>";
        }

        /*
            Abstraction - we hide unnecessary details and we only show essential features of an object
            Encapsulation - we restrict acess of some of our objecst components
            Inheritance - one class can inherit the properties (variable) and methods(functions) of another class
            Polymorphism - the ability of objects to respond to the same method(function) call in different ways
        */

        // Class - a is a blueprint for creating objects (instances of a class)

        
        class Car {
            
            // Attributes
            public $color;
            public $model;

            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
            }

            // Behaviours
            public function GetInfo(){
                p("Color : ".$this->color."- Model : ".$this->model);
            }
            public function Drive(){
                p("Car is driving now!");
            }

            
        }

        // Instances
        $redCar = new Car("red", 2020);
        $redCar->GetInfo();

        $blueCar = new Car("blue",2021);
        $blueCar->GetInfo();




        // Inheritance
        class Vehicle {
            public $model;

            public function move(){
                p("Vehicle is moving");
            }
        }


        class Bike extends Vehicle{
            // Inherits model
            // Inherits the move() method 
        }


        $bike1 = new Bike();
        $bike1->move();

        // Encapsulation 
        class Helicopter extends Vehicle{
            private $name = "Default Name"; // Encapsulate

            public function __construct($name){
                $this->name=$name;
            }

            public function SetName($name){
                $this->name=$name;
            }

            public function GetName(){
                return $this->name;
            }
            
        }


        $h1 = new Helicopter("X40H");
        p($h1->GetName());







        // Overriding 
        class Animal{
            public $color = "default color";

            public function sound(){
                p("Default sound");
            }
        }

        class Dog extends Animal{
            public $color = "red";

            public function sound(){
                p("bark!");
            }
        }

        class Cat extends Animal{
            public function sound(){
                p("meow!");
            }
 
        }


        $dog1 = new Dog();
        p($dog1->color);
        $dog1->sound();

        $cat = new Cat();
        $cat->sound();


        // Method overloading
        function sayHello($name="Default", $greeting=null){
            if(!isset($greeting)){
                p($name);
            }else{
                p($name." ".$greeting);
            }
        }    
    
        sayHello();
        sayHello("John");
        sayHello("John","Hi there!");
        

    ?>
</body>
</html>