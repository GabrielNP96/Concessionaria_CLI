<?php
namespace App\Vehicles\Car;
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Vehicles\Vehicle;

class Car extends Vehicle {
    protected float $engine;
    protected int $carDoorsQuantity;

    function __construct(string $name, string $manufacturer, int $year, string $color, float $price, float $engine, int $carDoorsQuantity) {
        parent::__construct($name, $manufacturer, $year, $color, $price);
        $this->engine = $engine;
        $this->carDoorsQuantity = $carDoorsQuantity;
    }

    function getInfo():string {
        return <<<TEXT
        Dados do Carro:
        Nome: $this->name
        Fabricante: $this->manufacturer
        Ano: $this->year
        Cor: $this->color
        Preço: $this->price;
        Motor: $this->engine
        Quantidade de portas: $this->carDoorsQuantity
        TEXT;
    }
}