<?php

namespace contracts\src;

interface UserInterface
{

    public function create($name , $email);
    public function displayUser($userId);
    public function update($userId , $newName , $newEmail);
    public function delete($userId);
}