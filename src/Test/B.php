<?php

namespace App\Test;

class B implements Letter
{
    private EnumB $letter;

    public function __construct(string|EnumB $letter)
    {
        $this->setLetter($letter);
    }

    public function getLetter(): EnumB
    {
        return $this->letter;
    }

    public function setLetter(string|EnumB $letter): self
    {
        if (is_string($letter)) {
            $letter = EnumB::from($letter);
        }
        $this->letter = $letter;
        return $this;
    }
}