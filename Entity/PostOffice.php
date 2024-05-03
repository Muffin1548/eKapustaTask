<?php

namespace Entity;


class PostOffice
{
    private array $envelopes = [];

    public function addEnvelope(Envelope $envelope): void
    {
        $this->envelopes[] = $envelope;
    }

    /**
     * @todo выглядит как то костыльно, можно было бы вынести эту структуру в Envelope
     * и избавиться от цепочки вызовов геттеров но подумал что письмо не может отправить само себя
    */
    public function send(): void
    {
        foreach ($this->envelopes as $envelope) {
            echo sprintf(
                "Letter delivered from: %s\n to: %s\n with content: %s\n and count of stamps: %s\n",
                $envelope->getConsumer()->getFullAddress(),
                $envelope->getProduces()->getFullAddress(),
                $envelope->getLetters()->getContent(),
                $envelope->getStamps()->getCount()
            );
        }
    }
}
