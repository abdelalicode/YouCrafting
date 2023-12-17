<?php
include_once "db.class.php";


class Article extends Db {

    public function getAll(){
        $sqlsel = "SELECT * FROM article";
        $resultart = $this->connect()->query($sqlsel);
        return $resultart;
    }

    public function getYour(){
        $sqlselus = "SELECT * FROM article WHERE user_id='3'";
        $resultyour = $this->connect()->query($sqlselus);
        return $resultyour;
    }

    public function readArticle(){
        $sqlread = "SELECT * FROM article WHERE id = 1";
        $resultread = $this->connect()->query($sqlread);
        return $resultread;
    }

    public function setArticle($title, $content, $userid) {
        $sqlins = "INSERT INTO article (`title`, `content`, `user_id`) VALUES ('$title', '$content', '$userid')";
        $result = $this->connect()->query($sqlins);
    }

    // public function setArticle($title, $content, $userid) {
    //     $sqlins = "INSERT INTO article (`title`, `content`, `user_id`) VALUES (?, ?, ?)";
    //     $stmt = $this->connect()->prepare($sqlins);
    //     $stmt->bind_param('sss', $title, $content, $userid);
    //     $stmt->execute();
    //     $stmt->close();
    // }

    public function deleteArticle($idd) {
       $sqldel ="DELETE FROM `article` WHERE id = $idd";
       $resdel = $this->connect()->query($sqldel);
    }
}