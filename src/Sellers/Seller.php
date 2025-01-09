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
    
    public function getInfo():string {
        return <<<TEXT
        Dados do vendedor:
        Nome: $this->name
        Nome de usuário: $this->userName
        -----------------------------------
        TEXT;
    }
}