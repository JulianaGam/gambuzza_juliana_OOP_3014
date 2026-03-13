<?php

namespace MyProject\Dolls;

use MyProject\WashableTrait;

/**
 * BabyDoll class.
 */
class BabyDoll extends Doll
{
    use WashableTrait;

    public bool $canCry;

    /**
     * @param string $name
     * @param string $color
     * @param string $ageGroup
     * @param bool $canCry
     */
    public function __construct(string $name, string $color, string $ageGroup, bool $canCry)
    {
        parent::__construct($name, $color, $ageGroup);
        $this->canCry = $canCry;
    }

    /**
     * Describe the baby doll.
     */
    public function describe(): void
    {
        $cryText = $this->canCry ? "can cry" : "cannot cry";
        echo "<p>{$this->name} is a baby doll that {$cryText}.</p>";
    }
}