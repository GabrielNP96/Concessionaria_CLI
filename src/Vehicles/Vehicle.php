<?php

namespace App\Vehicles;

class Vehicle {
    protected string $name;
    protected string $manufacturer;
    protected int $year;
    protected string $color;

    function __construct(string $name, string $manufacturer, int $year, string $color) {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->year = $year;
        $this->color = $color;
    }
}