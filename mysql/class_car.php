<?php

class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;
    static $color = "red";

    // function __construct() {
    //     echo $this->wheels = 10;
    // }  

    function MoveWheels() {
        echo "Wheels move<br>";
    }

    // function ChangeWheels() {
    //     $this->wheels = 10;
    // }

    function ShowProperty() {
        echo $this->hood;
    }
}


//mostenirea la clase
class Plane extends Car {

}



// if(class_exists("Car")) {
//     echo "Class exists<br>";
//     if(method_exists("Car","MoveWheels")) {
//         echo "Method exists<br>";
//     }
// } else {
//     echo "Class not created";
// }



$bmw = new Car();



// echo $bmw->MoveWheels();
// echo $bmw->wheels . "<br>";
// $bmw->ChangeWheels();
// echo $bmw->wheels;

// $jet = new Plane();

// $jet->MoveWheels();


echo $bmw->ShowProperty();

echo Car::$color;

?>


