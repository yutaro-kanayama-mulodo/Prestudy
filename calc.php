<?php

namespace SaigonTest\Ci;

class Calc
{
    private $mem = 0;

    public function get()
    {
        return $this->mem;
    }

    public function reset()
    {
        $this->mem = 0;
    }

    public function add($int)
    {
        $this->checkInt($int);
        $this->mem += $int;
    }


    private function checkInt($var)
    {
        if (gettype($var) !== "integer") {
            throw new \InvalidArgumentException('Set integer');
        }
    }
}
