<?php

namespace MyProject\Dolls;

use MyProject\WashableTrait;

/**
 *  babydoll extends from doll 
 */
class BabyDoll extends Doll
{
    use WashableTrait;

    public bool $canCry;

    // used bool to set it to true or flase, if it cries or not.

    public function __construct(string $name, string $color, string $ageGroup, bool $canCry)
    {
        parent::__construct($name, $color, $ageGroup);
        $this->canCry = $canCry;
    }

    /**
     * here is the description for the baby doll, also it says if the doll cries or not depending if it cries or not
     */
    public function describe(): void
    {
        $cryText = $this->canCry ? "can cry" : "cannot cry";
        echo "<p>{$this->name} is a baby doll that {$cryText}.</p>";
    }
}