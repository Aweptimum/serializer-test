<?php

namespace App\Test;

use BackedEnum;
use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

#[DiscriminatorMap(
    typeProperty: 'letter',
    mapping: [
        'a' => A::class,
        'A' => A::class,
    ]
)]
interface Letter
{
    public function getLetter(): BackedEnum;
}