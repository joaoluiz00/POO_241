<?php

    class UserService {
        private $userRepository;
// …. Construtor, set e gets , se necessário
        public function registerUser($name, $email) {
            if ($this->userRepository->getUserByEmail($email) === null) {
                $user = new User($name, $email);
                $this->userRepository->addUser($user);
                return $user;
            }
                return null;
            }
}


?>