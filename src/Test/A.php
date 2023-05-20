<?php

namespace App\Test;

class A implements Letter
{
    private EnumA $letter;

    public function __construct(string|EnumA $letter)
    {
        $this->setLetter($letter);
    }

    public function getLetter(): EnumA
    {
        return $this->letter;
    }

    public function setLetter(string|EnumA $letter): self
    {
        if (is_string($letter)) {
            $letter = EnumA::from($letter);
        }
        $this->letter = $letter;
        return $this;
    }
}