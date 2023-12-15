<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.cdnfonts.com/css/huntesla-gloficka" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>YouCrafting</title>
</head>


<body>


    <?php
    include "classes/person.class.php";
    include "classes/article.class.php";
    include "includes/navbar.php";
    ?>

    <div id="background" class="container text-white m-5 p-5">
        <h1 class="text-shadow">Hello USER!</h1>
        <p>Search </p>
        <form class="d-flex w-50" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><span class="material-symbols-outlined">
                    feature_search
                </span>
            </button>
        </form>


    </div>

    <div class="cards">
        <h2 class="mb-3">Articles You May like</h2>
        <div class="row row-cols-1 row-cols-md-2 g-4">




            <?php

            $artObj = new Article();
            $result = $artObj->getAll();
            if ($result) {
                while ($row = $result->fetch()) {
                    echo "<div class='col'>";
                    echo "<div class='card text-white d-flex flex-wrap w-100'>";
                    echo "<img class='card-img' src='assets/a.jpg' alt='Card image'>";

                    echo "<div class='card-img-overlay'>";
                    echo "<h4 style='text-shadow: 1px 1px 2px #000000;' class='card-title mt-5 pt-5'>" . $row['title'] . "</h4>";
                    echo "<p class='card-text'></p>";
                    echo "<a href='reading.php'><button type='button' class='btn btn-outline-dark'>Read The Article</button></a>";
                    echo "<p style='text-shadow: 1px 1px 2px #000000;' class='card-text mt-5 pt-5'>Created at: " . $row['creation_date'] . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "Nothing To show";
            }

            ?>

        </div>

    </div>

</body>

</html>