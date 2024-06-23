<?php

# imports
require_once "../service/UserService.php";

class UserController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    # get all users from the getAllUsers() function
    public function listUsers() {
        $users = $this->userService->getAllUsers();
        return $users;
    }

}

?>