<?php

namespace MyProject\Stuffies;

use MyProject\WashableTrait;

/**
 * TeddyStuffy extends from stuffy
 */
class TeddyStuffy extends Stuffy
{
    use WashableTrait;

    /**
     * creates soome text and describes the teddystuffy
     */
    public function play(): void
    {
        echo "<p>{$this->name} is a teddy bear that loves cuddles.</p>";
    }
}