<?php

namespace MyProject\Dolls;

/**
 * PrincessDoll class
 */
class PrincessDoll extends Doll
{
    public string $theme;

    /**
     * @param string $name
     * @param string $color
     * @param string $ageGroup
     * @param string $theme
     */
    public function __construct(string $name, string $color, string $ageGroup, string $theme)
    {
        parent::__construct($name, $color, $ageGroup);
        $this->theme = $theme;
    }

    /**
     * Describe the princess doll.
     */
    public function describe(): void
    {
        echo "<p>{$this->name} is a {$this->color} {$this->theme} doll for ages {$this->ageGroup}.</p>";
    }
}