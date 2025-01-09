<?php

namespace App\Vehicles;

abstract class Vehicle {
    protected string $name;
    protected string $manufacturer;
    protected int $year;
    protected string $color;
    protected float $price;

    function __construct(string $name, string $manufacturer, int $year, string $color, float $price) {
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->year = $year;
        $this->color = $color;
        $this->price = $price;
    }

    abstract function getInfo():string;
}