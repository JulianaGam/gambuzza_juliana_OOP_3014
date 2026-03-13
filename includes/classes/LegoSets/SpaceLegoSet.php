<?php

namespace MyProject\LegoSets;

/**
 * SpaceLegoSet extends from legoset
 */
class SpaceLegoSet extends LegoSet
{
    /**
     * creates some text to describe what you can do eith this lego set
     */
    public function play(): void
    {
        echo "<p>{$this->name} lets you build rockets and explore space.</p>";
    }
}