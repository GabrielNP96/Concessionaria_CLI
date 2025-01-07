<?php
namespace App\Vehicles\Car;
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Vehicles\Vehicle;

class Car extends Vehicle {
    protected float $engine;
    protected int $carDoorsQuantity;

    function __construct(string $name, string $manufacturer, int $year, string $color, float $engine, int $carDoorsQuantity) {
        parent::__construct($name, $manufacturer, $year, $color);
        $this->engine = $engine;
        $this->carDoorsQuantity = $carDoorsQuantity;
    }
}