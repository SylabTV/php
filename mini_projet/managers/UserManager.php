<?php

class UserManager {

    private array $users = [];
    private PDO $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=mini_projet', 'root', '');
    }

    public function getUsers(): array {
        return $this->users;
    }

    public function setUsers(array $users): void {
        $this->users = $users;
    }

    public function loadUsers(): void {
        $query = $this->db->query("SELECT * FROM users");
        $usersData = $query->fetchAll(PDO::FETCH_ASSOC);

        $users = [];

        foreach ($usersData as $userData) {
            $user = new User(
                $userData["username"],
                $userData["email"],
                $userData["password"],
                $userData["role"]
            );

            $user->setId($userData["id"]);
            $users[] = $user;
        }

        $this->setUsers($users);
    }

    public function saveUser(User $user): void {
        $stmt = $this->db->prepare("
            INSERT INTO users (username, email, password, role)
            VALUES (:username, :email, :password, :role)
        ");
        $stmt->execute([
            ':username' => $user->getUsername(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
            ':role' => $user->getRole()
        ]);

        $user->setId($this->db->lastInsertId());
    }

    public function deleteUser(User $user): void {
    }
}