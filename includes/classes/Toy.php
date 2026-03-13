<?php

namespace MyProject;

/**
 * Here I created the parent classes for all the toys
 */
class Toy implements ToyInterface

{
    public string $name;
    public string $color;
    public string $ageGroup;
/**
 * Creates a new toy with a name, a color and an age group 
 */

    public function __construct(string $name, string $color, string $ageGroup)
    {
        $this->name = $name;
        $this->color = $color;
        $this->ageGroup = $ageGroup;
    }

    /**
     * here creates the text shown for each toy using its information name, color, agegroup
     */
    public function describe(): void
    {
        echo "<p>{$this->name} is a {$this->color} toy for ages {$this->ageGroup}.</p>";
    }

    /**
     * same idea, creates the text for each toy talking about play()
     */
    public function play(): void
    {
        echo "<p>{$this->name} is fun to play with.</p>";
    }

    /**
     * same idea, creates the text for each toy but saying thats is store() in a box.
     */
    public function store(): void
    {
        echo "<p>{$this->name} can be stored in a toy box.</p>";
    }
}