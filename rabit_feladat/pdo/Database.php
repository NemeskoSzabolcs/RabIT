<?php

class Database {

    # private variables for the connection
    private $host = "localhost";
    private $database_name = "rabit_feladat";
    private $username = "root";
    private $password = "";
    public $connection;

    # establish a connection to the "rabit_feladat" database with PDO
    # if any error occurs during the connection, an exception is generated
    public function getConnection() {
        $this->connection = null;

        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" .$this->database_name, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Database Connection Error" . $e->getMessage();
        }

        return $this->connection;

    }

}

?>