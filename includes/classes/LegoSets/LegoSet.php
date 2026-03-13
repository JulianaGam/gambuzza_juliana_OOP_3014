<?php

namespace MyProject\LegoSets;

use MyProject\Toy;

/**
 * LegoSet class
 */
class LegoSet extends Toy
{
    /**
     * Play with the Lego set
     */
    public function play(): void
    {
        echo "<p>{$this->name} can be used to build different F1 cars.</p>";
    }
}