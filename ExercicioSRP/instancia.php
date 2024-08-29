<?php //arquivo de instâncias
    $userRepository = new UserRepository();
    $userService = new UserService($userRepository);

    
    $userService->registerUser("John", "john@example.com");
    $user = $userService->registerUser("Jane", "jane@example.com");
    $retrievedUser = $userRepository->getUserByEmail("john@example.com");
        if ($retrievedUser !== null)
            echo "User found: " . $retrievedUser->getName() . " - ".$retrievedUser->getEmail();
        else
            echo "User not found.";

?>