<?php
include_once "db.class.php";


class Person extends Db {

    public function getUsers() {
        $sql = "SELECT * FROM users";

        $cnctd = $this->connect()->query($sql);
        return $cnctd;    
    }
}