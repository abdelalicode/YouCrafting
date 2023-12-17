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
                echo "<button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#modal{$row["id"]}'>UPDATE</button>";
                echo "&nbsp&nbsp";
                echo "<a href='includes/deletearticle.php?id=" . $row['id'] . "'class='btn btn-danger'>DELETE</a>";
                echo "<hr>";
                ?>

                <!-- Modal -->
                <div class="modal fade" id="modal<?= $row["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Update Your Article</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="includes/updatearticle.php" method="post">
                                    <div class="form-group shadow-textarea">
                                        <label>Title</label><br>
                                        <input name="title" type="text" class="form-control" value="<?= $row['title'] ?>"><br><br>
                                        <label for="exampleFormControlTextarea6">Your Article</label><br>
                                        <textarea name="content" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3"><?= $row['content'] ?></textarea><br><br>
                                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="update" class="btn btn-secondary" value="Save changes">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
        } else {
            echo "No Article Found!";
        }
        ?>
    </div>
</div>

</div>
