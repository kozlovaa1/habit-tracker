<?php

namespace App\Entity;

class User
{
    public function __construct(
        public string $firstName,
        public string $lastName,
    ) {}

    public string $fullName {
        get => $this->firstName . ' ' . $this->lastName;
        set(string $value) => [$this->firstName, $this->lastName] = explode(' ', $value, 2);
    }
}
