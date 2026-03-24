
<?php
require "connexion.php";
require_once "User.php";

$query = $db->query("SELECT * FROM users WHERE id = 1");
$userData = $query->fetch(PDO::FETCH_ASSOC);


$userDb = new User(
  $userData["first_name"],
  $userData["last_name"],
  $userData["email"]
);
$userDb->setId($userData["id"]);


$query = $db->query("SELECT * FROM users");
$allUsers = $query->fetchAll(PDO::FETCH_ASSOC);

$allUser = [];

foreach ($allUsers as $userData) {
    $allUserDb = new User(
        $userData["first_name"],
        $userData["last_name"],
        $userData["email"]
    );
    $allUserDb->setId($userData["id"]);
    $allUser[] = $allUserDb;
}



$superman = [
	"first_name" => "Clark",
	"last_name" => "Kent",
	"email" => "clark.kent@test.fr"
];

$user = new User(
  $superman["first_name"],
  $superman["last_name"],
  $superman["email"]
);

$query = $db->query("INSERT INTO users (first_name, last_name, email) VALUES ('{$user->getFirstName()}', '{$user->getLastName()}', '{$user->getEmail()}')");

$user->setId($db->lastInsertId());