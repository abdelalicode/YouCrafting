<?php
include "../classes/article.class.php";


if (isset($_POST["submit"])) {

$title = $_POST["title"];
$content = $_POST["content"];
$userid = 3;

$insObj = new Article();
$insObj->setArticle($title, $content, $userid);


header('Location: ../index.php');
}
?>