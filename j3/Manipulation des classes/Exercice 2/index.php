
<?php

require_once "Character.php";

$character1 = new Character(1);
echo $character1->getFullName();

$character->setFirstName("Sarah");
$character->setLastName("Connor");

echo $character1->getFullName();