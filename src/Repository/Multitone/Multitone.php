<?php

namespace App\Repository\Multitone;

class Multitone implements MultitoneInterface
{
    use MultitoneTrait;

    private $test;

    private $history = [];

    public function setTest(string $data = null)
    {
        if (!is_null($data)) {
            $this->test = $data;
            $this->setHistory($data);
        }

        return $this;
    }

    public function setHistory(string $data)
    {
        $this->history[] = $data;
    }
}
