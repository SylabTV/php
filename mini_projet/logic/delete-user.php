<?php
require_once '../models/User.php';
require_once '../managers/UserManager.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $user = new User('', '', '', '');
    $user->setId($id);

    $userManager = new UserManager();
    $userManager->deleteUser($user);
}

header('Location: ../index.php');
exit;