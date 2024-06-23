<?php

class Advertisement {
    private $id;
    
    # this is the relevant users.name value from the users table
    private $username;
    private $title;

    public function __construct($id, $username, $title) {
        $this->id = $id;
        $this->username = $username;
        $this->title = $title;
    }


    # getter, and setter for id
    public function getId() {
        return $this->id;
    }
    public function setId($new) {
        $this->id = $new;
    }

    # getter, and setter for username
    public function getUsername() {
        return $this->username;
    }
    public function setUsername($new) {
        $this->username = $new;
    }

    # getter, and setter for title
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($new) {
        $this->title = $new;
    }

}

?>