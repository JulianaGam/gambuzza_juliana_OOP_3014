<?php

namespace MyProject\Stuffies;

use MyProject\Toy;

/**
 * Stuffy extends from toy
 */
class Stuffy extends Toy
{
    /**
     *  creates some text describing how is the stuffy
     */
    public function play(): void
    {
        echo "<p>{$this->name} is soft and great for hugs.</p>";
    }
}