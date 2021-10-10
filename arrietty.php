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
     echo "<br><img src='uploads/karigurashi009.jpg" . $Arrietty->prodPhoto .  "'><br>";
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