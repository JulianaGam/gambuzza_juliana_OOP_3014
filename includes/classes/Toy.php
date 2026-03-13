<?php

namespace MyProject;

/**
 * Parent class for all toys
 */
class Toy implements ToyInterface
{
    public string $name;
    public string $color;
    public string $ageGroup;

    /**
     * @param string $name
     * @param string $color
     * @param string $ageGroup
     */
    public function __construct(string $name, string $color, string $ageGroup)
    {
        $this->name = $name;
        $this->color = $color;
        $this->ageGroup = $ageGroup;
    }

    /**
     * Describe the toy
     */
    public function describe(): void
    {
        echo "<p>{$this->name} is a {$this->color} toy for ages {$this->ageGroup}.</p>";
    }

    /**
     * Play with the toy
     */
    public function play(): void
    {
        echo "<p>{$this->name} is fun to play with.</p>";
    }

    /**
     * Store the toy
     */
    public function store(): void
    {
        echo "<p>{$this->name} can be stored in a toy box.</p>";
    }
}