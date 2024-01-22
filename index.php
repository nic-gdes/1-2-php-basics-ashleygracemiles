<?php

$integer = 18;

$nameofyourthing = 4.4;

$nameofyourthing;

echo "I " . "love " . "PHP" . "!";

$my_array = [1,2,3,4];

class Car {
    public $make;
    public $model;
    public $year;

    function set_properties($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}

$my_car = new Car();

$my_car->set_properties("chevy","camero","1968");
echo "I have a " . $my_car->year . " " . $my_car->make . " " . $my_car->model;


if($integer >= 10) {
    echo "The statement is true!";
}

else {
    echo "This statement is false!";
}

for($i = 0; $i < count($my_array); $i++) {
    echo $i . "<br />";
}

foreach ($my_array as $single) {
    echo $single . "<br />";
}

?>