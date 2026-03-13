<?php

namespace MyProject\Stuffies;

use MyProject\Toy;

/**
 * Stuffy class.
 */
class Stuffy extends Toy
{
    /**
     * Play with the stuffy.
     */
    public function play(): void
    {
        echo "<p>{$this->name} is soft and great for hugs.</p>";
    }
}