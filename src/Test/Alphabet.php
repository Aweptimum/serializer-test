<?php

namespace App\Test;

class Alphabet
{
    /** @var A[] */
    private array $letters;

    public function __construct(?array $letters = [])
    {
        $this->letters = $letters;
    }

    public function getLetters(): array
    {
        return $this->letters;
    }

    public function addLetters(Letter $letter)
    {
        $this->letters[] = $letter;
    }
}