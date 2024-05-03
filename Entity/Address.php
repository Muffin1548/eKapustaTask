<?php

namespace Entity;

class Address
{
    public function __construct(
        private readonly string $country,
        private readonly string $city,
        private readonly string $street,
    ) {
    }

    public function getFullAddress(): string
    {
        return "{$this->country}, {$this->city}, {$this->street}";
    }
}
