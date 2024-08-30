<?php
    require_once 'User.php';
    require_once 'UserRepository.php';
    require_once 'UserService.php';

    $userRepository = new UserRepository();
    $userService = new UserService($userRepository);

    $userService->registerUser("Joao", "joao@gmail.com");
    $userService->registerUser("luiz", "luiz@gmail.com");

    $retrievedUser = $userRepository->getUserEmail("gustavo@gmail.com");

    if ($retrievedUser !== null) {
        echo "User encontrado: " . $retrievedUser->getNome() . " - " . $retrievedUser->getEmail();
    } else {
        echo "User não encontrado.";
    }
?>
