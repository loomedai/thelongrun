<?php
require "settings/init.php";


if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["prodPhoto"]["tmp_name"])){
        move_uploaded_file($file["prodPhoto"]["tmp_name"], "uploads/" . basename($file["prodPhoto"]["name"]));
    }


    $sql = "INSERT INTO ghiblifilm (prodTitel, prodDes, prodYear, prodCountry, prodDir, prodTime, prodCast, prodMusic, prodGenre, prodPhoto) VALUES (:prodTitel, :prodDes, :prodYear, :prodCountry, :prodDir, :prodTime, :prodCast, :prodMusic, :prodGenre, :prodPhoto)";
    $bind = [":prodTitel" => $data["prodTitel"],
        ":prodDes" => $data["prodDes"],
        ":prodYear" => $data["prodYear"],
        ":prodCountry" => $data["prodCountry"],
        ":prodDir" => $data["prodDir"],
        ":prodTime" => $data["prodTime"],
        ":prodCast" => $data["prodCast"],
        ":prodMusic" => $data["prodMusic"],
        ":prodGenre" => $data["prodGenre"],
        ":prodPhoto" => (!empty($file["prodPhoto"]["tmp_name"])) ? $file["prodPhoto"]["name"] : NULL,
    ];

    $db ->sql( $sql, $bind, false);
    echo "Filmen er nu indsat. <a href='insert.php'>Indsæt en ny film.</a>";
    exit;
}
?>



<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Ghibli database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <img src="images/totoro2.png" id="totorophoto">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/y7etbb6fgqruwg5o86t8eo2wywvvdlu54udfhebfjweavmfg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
    <form method="post" action="insert.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodTitel">Titel</label>
                    <input class="form-control" type="text" name="data[prodTitel]" id="prodTitel" placeholder="Filmens titel" value="">
                </div>
            </div>
            <br>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodGenre">Genre</label>
                    <input class="form-control" type="text" name="data[prodGenre]" id="prodGenre" placeholder="Action, komedie, documentar..." value="">

                </div>

            </div>
            <br>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodYear">Udgivelsesår </label>
                    <input class="form-control" type="number" step="0" name="data[prodYear]" id="prodYear" placeholder="1988" value="">
                </div>
            </div>
            <br>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodCountry">Udgivelses land</label>
                    <input class="form-control" type="text" name="data[prodCountry]" id="prodCountry" placeholder="Land" value="">

                </div>

            </div>
            <br>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodMusic">Musik</label>
                    <input class="form-control" type="text" name="data[prodMusic]" id="prodMusic" placeholder="Komponist, okestra, band..." value="">

                </div>

            </div>
            <br>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodCast">Medvirkende</label>
                    <input class="form-control" type="text" name="data[prodCast]" id="prodCast" placeholder="Skuespillere, stemmer..." value="">

                </div>

            </div>
            <br>


            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodDir">Director</label>
                    <input class="form-control" type="text" name="data[prodDir]" id="prodDir" placeholder="Instruktør" value="">

                </div>

            </div>
            <br>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodTime">Længde</label>
                    <input class="form-control" type="number" step="0.1" name="data[prodTime]" id="prodTime" placeholder="1 time" value="">
                </div>
            </div>
            <br>


            <div class="col-12">
                <div class="form-group">
                    <label for="prodDes">Beskrivelse</label>
                    <textarea class="form-control" name="data[prodDes]" id="prodDes"></textarea>
                </div>
                <br>

                <div class="col-12">
                    <label class="form-label" for="prodPhoto">Billede</label>
                    <input type="file" class="form-control" id="prodPhoto" name="prodPhoto">
                </div>
                <br>


            <div class="col-12 col-md-6 offset-md-6">
                <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret Film</button>


            </div>



                </div>

        </div>
    </form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        tinymce.init({
            selector: '#prodDes',

        });
        alert("Denne side vil måske bruge coockies en dag. Who knows. Du har ikke noget valg! ")
    </script>
</body>
</html>
