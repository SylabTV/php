<?php

require_once "Character.php";
require_once "Weapon.php";

$character = new Character("Ragnar");

$weapon = new Weapon("Sword", 10);
$character->setWeapon($weapon);

echo $character->getName() . "<br>";
echo $character->getWeapon()->getName() . "<br>";
echo $character->getWeapon()->getDamage() . "<br>";

echo $character->fight();