<?php
include "../classes/article.class.php";


if (isset($_POST["update"])) {

    $id =  $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];


    $upObj = new Article();
    $upObj->updateArticle($id, $title, $content);


    header('Location: ../index.php');
    exit();
}
