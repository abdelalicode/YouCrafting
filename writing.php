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

    <div class="form form-control ">
        <form action="includes/addarticle.php" method="post">
            <div class="form-group shadow-textarea">
                <label>Title</label><br>
                <input name="title" type="text" class="form-control" placeholder="Enter your title here"><br><br>
                <label for="exampleFormControlTextarea6">Your Article</label><br>
                <textarea name="content" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."></textarea><br><br>
                <input name="submit" type="submit" class="btn btn-dark" value="Add your article">
            </div>
        </form>
    </div>




</div>