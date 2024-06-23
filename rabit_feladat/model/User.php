<?php

class User {
    private $id;
    private $name;

    public function __construct($id,$name) {
        $this->id = $id;
        $this->name = $name;
    }

    # getter, and setter for id
    public function getId() {
        return $this->id;
    }

    public function setId($new) {
        $this->id = $new;
    }


    # getter, setter for name
    public function getName() {
        return $this->name;
    }

    public function setName($new) {
        $this->name = $new;
    }

}

?>