<?php

namespace MyProject;

/**
 * this sets the rule for all the toy classes
 */
interface ToyInterface
{
    /**
     * this makes that every toy has the play() method
     */
    public function play(): void;
}