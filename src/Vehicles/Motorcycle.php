<?php
namespace App\Vehicles\Motorcycle;
require_once __DIR__ . '/../../vendor/autoload.php';
use  App\Vehicles\Vehicle;

class Motorcycle extends Vehicle {
    protected int $displacement;

    function __construct(string $name, string $manufacturer, int $year, string $color, int $displacement) {
        parent::__construct($name, $manufacturer, $year, $color);
        $this->displacement = $displacement;
    }
}
