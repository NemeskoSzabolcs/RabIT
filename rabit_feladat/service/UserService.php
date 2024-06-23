<?php

# imports
require_once "../pdo/Database.php";
require_once "../model/User.php";

class UserService {
    
    private $connection;

    # connect to the "rabit_feladat" database in the constructor
    public function __construct() {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    # get all users from the database,
    # and add to the "users_array" array (array elements are User objects),
    # and return the array
    public function getAllUsers() {
        
        $users_array = [];

        $query = $this->connection->prepare("SELECT * FROM users");
        $query->execute();
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $users_array[] = new User($row["id"], $row["name"]);
        }

        return $users_array;

    }
}

?>