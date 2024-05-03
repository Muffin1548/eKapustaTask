<?php

namespace Entity;

class Letter
{
    public function __construct(
        private readonly string $content
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
