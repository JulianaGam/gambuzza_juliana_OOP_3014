<?php

namespace MyProject\Dolls;

/**
 * princes doll extends from doll
 */
class PrincessDoll extends Doll
{
    public string $theme;


    /**
 * Creates a new toy with a name, a color, an age group and a theme
 */
    public function __construct(string $name, string $color, string $ageGroup, string $theme)
    {
        parent::__construct($name, $color, $ageGroup);
        $this->theme = $theme;
    }

    /**
     * creates text to describe the princess doll
     */
    public function describe(): void
    {
        echo "<p>{$this->name} is a {$this->color} {$this->theme} doll for ages {$this->ageGroup}.</p>";
    }
}