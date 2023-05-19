<?php

use App\Test\A;
use App\Test\Alphabet;
use App\Test\B;
use App\Test\EnumA;
use App\Test\EnumB;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Serializer\SerializerInterface;

class SerializerTestCase extends KernelTestCase
{
    public function testNormalization(): void
    {
        static::bootKernel();

        $alphabet = new Alphabet([new A(EnumA::A), new A(EnumA::a)]);

        $serializer = static::getContainer()->get(SerializerInterface::class);

        $normalized = $serializer->normalize($alphabet);

        var_dump($normalized);
    }
}