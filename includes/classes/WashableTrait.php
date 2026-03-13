<?php

namespace MyProject;

/**
 * WashableTrait.
 */
trait WashableTrait
{
    /**
     * Wash the toy.
     */
    public function wash(): void
    {
        echo "<p>{$this->name} can be washed gently.</p>";
    }
}