<?php 
include "../classes/article.class.php";

$idd = $_GET["id"];


$artdel = new Article();
$artdel->deleteArticle($idd);

header("Location: ../your_articles.php");
echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
echo"<strong>Holy guacamole!</strong> You should check in on some of those fields below.";
echo"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
echo"<span aria-hidden='true'>&times;</span>";
echo"</button>";
echo"</div>";
exit();


?>