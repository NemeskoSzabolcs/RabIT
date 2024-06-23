<?php

# imports
require_once "../pdo/Database.php";
require_once "../model/Advertisement.php";

class AdvertisementService {

    private $connection;

    # connect to the "rabit_feladat" database in the constructor
    public function __construct() {
        $db = new Database();
        $this->connection = $db->getConnection();
    }

    # get all advertisements from the database,
    # and add to the "advertisements_array" array (array elements are Advertisement objects),
    # and return the array
    public function getAdvertisements() {

        $advertisements_array = [];
        
        $query = $this->connection->prepare(
            "SELECT advertisements.id AS id, advertisements.title AS title, users.name AS username FROM advertisements, users WHERE users.id = advertisements.userId");
        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $advertisements_array[] = new Advertisement($row["id"], $row["username"], $row["title"]);
        }

        return $advertisements_array;

    }

}

?>