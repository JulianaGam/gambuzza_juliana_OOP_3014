<?php

namespace MyProject\LegoSets;

use MyProject\Toy;

/**
 * LegoSet extedns from toy
 */
class LegoSet extends Toy
{
    /**
     * creates some text for the lego sets play()
     */
    public function play(): void
    {
        echo "<p>{$this->name} can be used to build different F1 cars.</p>";
    }
}