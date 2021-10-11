<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Arrietty</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

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

    <img src="images/totoro2.png" id="totorophoto">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/y7etbb6fgqruwg5o86t8eo2wywvvdlu54udfhebfjweavmfg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
<?php

$ghiblifilm = $db->sql("SELECT * FROM ghiblifilm where prodTitel = 'Arrietty'");
foreach ($ghiblifilm as $Arrietty){
   }
    ?>
<br>
<br>











<div class="row">
    <div class="col col-md-12" id="prodTitel">
        <h1>
        <?php
        echo $Arrietty->prodTitel . "<br>" . "借りぐらしのアリエッティ";
        ?></h1>
    </div>


<div class="row">
 <div class="col col-md-12">
     <?php
     echo "<br><img src='uploads/karigurashi009.jpg7" . $Arrietty->prodPhoto .  "'><br>";
     ?>
</div>
    <br>

    <div class="row">
        <div class="column">

            <?php
            echo "<div>" . $Arrietty->prodDes;
            ?>
        </div>
        <br>

    <div class="row">
        <div class="column" id="colright">
            <?php
            echo "<div>" . $Arrietty->prodYear . "</div><div>" . $Arrietty->prodDir . "</div><div>" . $Arrietty->prodMusic . "</div><div>" . $Arrietty->prodCountry . "</div>";
            ?>
        </div>

        <br>
        <div class="row">
            <div class="col col-md-6">
                <?php
                echo "<div>" . $Arrietty->prodCast . "</div><div>" . $Arrietty->prodGenre . "</div><div>" . $Arrietty->prodTime . "</div>";
                ?>
            </div>
</body>