<?php

namespace MyProject\Stuffies;

use MyProject\WashableTrait;

/**
 * TeddyStuffy class
 */
class TeddyStuffy extends Stuffy
{
    use WashableTrait;

    /**
     * Play with the teddy stuffy
     */
    public function play(): void
    {
        echo "<p>{$this->name} is a teddy bear that loves cuddles.</p>";
    }
}