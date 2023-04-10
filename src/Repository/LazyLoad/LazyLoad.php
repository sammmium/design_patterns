<?php

namespace App\Repository\LazyLoad;

class LazyLoad
{
    private $user = null;

    public function __construct()
    {

    }

    public function getUser()
    {
        if (is_null($this->user)) {
            $this->user = User::getUserData();
            var_dump('init'); // инициализация происходит только один раз
        }

        return $this->user;
    }
}
