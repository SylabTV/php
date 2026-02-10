<?php
$numbers = [28, 32, 44, -67, 18, 24, -98];
?>

<ul>
<?php foreach($numbers as $number) { ?>
    <?php if($number < 0) { ?>
        <li><?= $number ?></li>
    <?php } ?>
<?php } ?>
</ul>
