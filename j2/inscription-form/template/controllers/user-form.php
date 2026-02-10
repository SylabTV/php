<?php
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];
$checkbox = $_POST['checkbox'];
echo ($password === $password_conf) ? "ok" : "nok";
echo ($checkbox === "yes") ? "checkbox : yes" : "checkbox : no"
?>