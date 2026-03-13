<?php

spl_autoload_register(function ($class) {

    $class = str_replace('MyProject\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);

    require_once $filepath;

});

/**
 * here creates each of teh toys and calls the methods 
 */

// name, color and age group
$toy = new MyProject\Toy("Luna", "Pink", "4+");
$toy->describe();
$toy->play();
$toy->store();

echo "<hr>";

// name, color and age group
$doll = new MyProject\Dolls\Doll("Mia", "Blue", "5+");
$doll->describe();
$doll->play();
$doll->store();

echo "<hr>";

// name, color, age group and theme
$princessDoll = new MyProject\Dolls\PrincessDoll("Sofia", "Purple", "4+", "Princess");
$princessDoll->describe();
$princessDoll->play();
$princessDoll->store();

echo "<hr>";

// babydoll with name, color, age group, and cries
// true = it cries
$babyDoll = new MyProject\Dolls\BabyDoll("Mimi", "Pink", "2+", true);
$babyDoll->describe();
$babyDoll->play();
$babyDoll->store();
$babyDoll->wash();

echo "<hr>";

// name, color and age group
$stuffy = new MyProject\Stuffies\Stuffy("Bunny", "White", "2+");
$stuffy->describe();
$stuffy->play();
$stuffy->store();

echo "<hr>";

// name, color and age group
$teddy = new MyProject\Stuffies\TeddyStuffy("Teddy", "Brown", "2+");
$teddy->describe();
$teddy->play();
$teddy->store();
$teddy->wash();

echo "<hr>";

// name, color and age group
$legoSet = new MyProject\LegoSets\LegoSet("Lego cars", "Multi", "5+");
$legoSet->describe();
$legoSet->play();
$legoSet->store();

echo "<hr>";

// name, color and age group
$spaceLego = new MyProject\LegoSets\SpaceLegoSet("Galaxy Explorer", "Multi", "7+");
$spaceLego->describe();
$spaceLego->play();
$spaceLego->store();