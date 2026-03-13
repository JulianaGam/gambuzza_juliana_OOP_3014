<?php

namespace MyProject\Dolls;

use MyProject\Toy;

/**
 * here we use the exted method so doll can extend from toy and then the dolls toys can extend from doll 
 */
class Doll extends Toy
{
    /**
     * here we create the text for the play() wxplaining what you can do with a doll
     */
    public function play(): void
    {
        echo "<p>{$this->name} can be dressed up and carried around.</p>";
    }
}