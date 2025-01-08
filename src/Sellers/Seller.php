<?php

namespace App\Sellers\Seller;

class Seller {
    private string $name;
    private string $userName;
    private string $password;

    function __construct(string $name, string $userName, string $password) {
        $this->name = $name;
        $this->userName = $userName;
        $this->password = $password;
    }
}