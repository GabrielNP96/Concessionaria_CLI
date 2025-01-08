<?php

namespace App\Customers\Customer;

class Customer {
    private string $name;
    private string $document;

    function __construct(string $name, string $document) {
        $this->name = $name;
        $this->document = $document;
    }
}