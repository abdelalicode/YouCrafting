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

    <div class="card">
        <div class="card-header">
            <h4>Your Articles</h4>
        </div>
        <div class="card-body">


            <?php

            $upObj = new Article();
            $resulread = $upObj->getYour();
            if ($resulread) {

                while ($row = $resulread->fetch()) {

                    echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                    echo "<p class='card-text'>created at: " . $row['creation_date'] . "</p>";
                    echo "<a href='includes/delete.php?=" . $row['id'] . "'class='btn btn-danger'>DELETE</a>";
                    echo "<hr>";
                }
            } else {
                echo "No Article Found!";
            }

            ?>



        </div>
    </div>

</div>