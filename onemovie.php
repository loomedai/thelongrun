<?php
require "settings/init.php";


$ghiblifilm = $db->sql("SELECT * FROM ghiblifilm where prodTitel = 'Arrietty'");
foreach ($ghiblifilm as $Arrietty){
    echo $Arrietty->prodTitel . "<br>" . $Arrietty->prodDes . "<br>" . $Arrietty->prodPhoto . "<br>" . $Arrietty->prodYear;
}
    ?>

