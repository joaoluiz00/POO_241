<?php

class UserRepository {
    private $users = [];

    public function __construct(){

    }

    public function addUser(User $user){
        $this->users[] = $user;
    }

    public function getUserEmail($email){
        foreach ($this->users as $user){
            if ($user->getEmail() === $email){
                return $user;
            }
        }
        return null;
    }
}
?>
