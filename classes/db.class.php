<?php

class Db {
  
    private $host ="localhost";
    private $user ="root";
    private $pwd ="";
    private $dbname ="youcrafting";


    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}


?>