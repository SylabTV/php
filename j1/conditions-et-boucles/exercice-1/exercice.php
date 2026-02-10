<?php
$animals = ["Chat", "Chien", "Lapin", "Souris"];
?>

<ul>
<?php foreach($animals as $animal) { ?>
    <li><?= $animal ?></li>
<?php } ?>
</ul>
