<?php
require "settings/init.php";
$ghiblifilm = $db->sql("SELECT * FROM ghiblifilm WHERE prodTitel = 'ponyo'");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ponyo</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="insert.php">Ghibli data</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Library
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="library.php">All films</a></li>
                            <li><a class="dropdown-item" href="arrietty.php">Arrietty</a></li>
                            <li><a class="dropdown-item" href="ponyo.php">Ponyo</a></li>
                            <li><a class="dropdown-item" href="#">My neighbor Totoro</a></li>
                            <li><a class="dropdown-item" href="#">Howls moving castle</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</head>

<body>

<div class="">test</div>
<?php
foreach ($ghiblifilm as $ponyo) {
    ?>
<div class="row">
    <div class="col-12 col-md-6 bg-blue">
        <?php
        ?>
    </div>


    <div class="col-12 col-md-6 bg-blue font-italic">
        <?php
        echo $ponyo->prodTitel;
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodYear;

        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo "<br><img src='images/" . $ponyo->prodPhoto . "'><br>";
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodCast;
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodCountry;
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodGenre;
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodMusic;
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodDir;
        ?>
    </div>




    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodDes;
        ?>
    </div>


    <div class="col-12 col-md-6">
        <?php
        echo $ponyo->prodTime;
        }
        ?>
    </div>

</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>