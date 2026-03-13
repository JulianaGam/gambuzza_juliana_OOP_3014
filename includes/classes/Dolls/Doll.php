<?php

namespace MyProject\Dolls;

use MyProject\Toy;

/**
 * Doll class.
 */
class Doll extends Toy
{
    /**
     * Play with the doll.
     */
    public function play(): void
    {
        echo "<p>{$this->name} can be dressed up and carried around.</p>";
    }
}