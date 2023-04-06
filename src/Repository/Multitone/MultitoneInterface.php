<?php

namespace App\Repository\Multitone;

interface MultitoneInterface
{
    public static function getInstance(string $instanceName): self;
}
