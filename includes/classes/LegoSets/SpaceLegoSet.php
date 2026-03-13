<?php

namespace MyProject\LegoSets;

/**
 * SpaceLegoSet class
 */
class SpaceLegoSet extends LegoSet
{
    /**
     * Play with the space Lego set
     */
    public function play(): void
    {
        echo "<p>{$this->name} lets you build rockets and explore space.</p>";
    }
}