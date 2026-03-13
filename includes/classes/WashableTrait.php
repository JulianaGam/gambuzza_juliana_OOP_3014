<?php

namespace MyProject;

/**
 * here adds the washing option for the washables toys classes.
 */
trait WashableTrait
{
    /**
     * here creates a text for the toys that are washable
     */
    public function wash(): void
    {
        echo "<p>{$this->name} can be washed gently.</p>";
    }
}