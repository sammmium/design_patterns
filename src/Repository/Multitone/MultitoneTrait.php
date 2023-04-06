<?php

namespace App\Repository\Multitone;

trait MultitoneTrait
{
    protected static $instances = [];

    private $name;

    private function __construct()
    {
        //
    }

    private function __clone()
    {
        //
    }

    private function __wakeup()
    {
        //
    }

    public static function getInstance(string $instanceName): MultitoneInterface
    {
        if (isset(static::$instances[$instanceName])) {
            return static::$instances[$instanceName];
        }

        static::$instances[$instanceName] = new static();
        static::$instances[$instanceName]->setName($instanceName);

        return static::$instances[$instanceName];
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
