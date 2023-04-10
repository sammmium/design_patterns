<?php

namespace App\Repository\LazyLoad;

class User
{
    public $name = 'Eugeny';

    public $age = 42;

    public $address = 'Minsk';

    public static function getUserData(): User
    {
        return new static;
    }
}
