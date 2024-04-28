<?php


namespace contracts\clas;

use contracts\src\UserInterface;
use config;

class User implements UserInterface
{

    public function __construct(public $conn)
    {

    }

    public function create($name, $email)
    {
        $stmt = $this->conn->prepare("INSERT INTO users (name,email) VALUES (?,?)");
        $stmt->bindparam($name, $email);
        $stmt->executed();
    }

    public function displayUser($userId)
    {

    }

    public function update($userId, $newName, $newEmail)
    {
        // TODO: Implement update() method.
    }

    public function delete($userId)
    {
        // TODO: Implement delete() method.
    }
}