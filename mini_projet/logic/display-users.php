<?php

$userManager = new UserManager();
$userManager->loadUsers();
$users = $userManager->getUsers();