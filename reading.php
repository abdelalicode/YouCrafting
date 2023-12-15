<?php
include "includes/navbar.php";
include_once "classes/article.class.php";
?>

<style>
    body {
        background: none;
    }

    #navbar {
        background: #1F0D16;
    }
</style>

<div class="container  m-5 p-5">

    <?php

    $readObj = new Article();
    $result = $readObj->readArticle();
    if ($result) {
        while ($row = $result->fetch()) {

            echo "<h1 style ='text-shadow: none; margin-bottom:100px'>" . $row['title'] . "</h1>";
            echo "<p>" . $row['content'] . "</p>";
        }
    } else {
        echo "Nothing To show";
    }

    ?>



</div>