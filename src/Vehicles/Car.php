<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use App\Vehicles\Vehicle;

$car = new Vehicle("Uno","Fiat", 1998, "Cinza");
var_dump($car);
