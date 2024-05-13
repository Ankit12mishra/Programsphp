<!-- The foreach loop can also be used to loop through properties of an object -->

<?php

class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");


foreach($myCar as $x => $y){
    echo "$x: $y <br>";
}




?>