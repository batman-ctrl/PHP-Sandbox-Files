<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract vs Interfaces</title>
</head>
<body>


<?php

    abstract class Vehicle{
        public $model;

        public function __construct($model){
            $this->model = $model;
        }

        // Abstract method (implemented by child class)
        abstract public function start();

        // Concrete method with a body
        public function stop(){
            echo "Stopping vehicle!<br>";
        }
    }


    class Car extends Vehicle{
        public function start(){
            echo "Car is starting!<br>";
        }
    }

    $car = new Car("BMW");
    $car->start();
    $car->stop();


    ///////////////////////////////////////////////////////////////////////////


    interface Engine{
        public function start();
    }

    interface Brake{
        public function stop();
    }

    class Bike implements Engine, Brake{
        public function start(){
            echo "Bike is starting!<br>";
        }

        public function stop(){
            echo "Bike is stopping!<br>";
        }
    }
    
    $bike = new Bike();
    $bike->start();
    $bike->stop();


    // Differences
    /*
        1 - both cant be instatiated (cant create an object directly)

        2 - class can only extend one abstract class, but a class can implement multiple 
        interfaces

        3 - an abstract class can have both abstract methods and concrete methods but 
            an interaface can only have (abstract methods / method signatures) (no implementation)

        4 - abstract class can have constructors, interface cannot
    */

?>
    
</body>
</html>