<?php

namespace Entity;

class Stamp
{
    public function __construct(
        private readonly int $count
    ) {
    }

    public function getCount(): int
    {
        return $this->count;
    }
}