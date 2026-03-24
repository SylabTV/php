<?php
  require_once '../models/User.php';
  require_once '../managers/UserManager.php';

  $username = $_POST['username'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';
  $role = $_POST['role'] ?? 'USER';

  $user = new User($username, $email, $password, $role);

  $userManager = new UserManager();
  $userManager->saveUser($user);

  header('Location: ../index.php');
exit;