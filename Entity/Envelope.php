<?php

namespace Entity;

class Envelope
{
    public function __construct(
        private readonly Letter $letters,
        private readonly Stamp $stamps,
        private readonly Address $consumer,
        private readonly Address $producer
    ) {
    }

    public function getLetters(): Letter
    {
        return $this->letters;
    }

    public function getStamps(): Stamp
    {
        return $this->stamps;
    }

    public function getConsumer(): Address
    {
        return $this->consumer;
    }

    public function getProduces(): Address
    {
        return $this->producer;
    }
}
