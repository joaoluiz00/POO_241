<?php

    class UserRepository{
    private $users = [];
    public function __construct(User $users){
        $this->users = $users;
    }

        public function getUserByEmail($email){
            foreach ($this->users as $user){
                if ($user->getEmail() === $email){
                    return $user;
                    return null;}}
        }
    }
?>