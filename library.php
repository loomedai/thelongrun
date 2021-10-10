<?php
require "settings/init.php";
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="container">
    <div class="film">
        <div class="filter p-5">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <input type="search" class="form-control nameSearch" placeholder="Søg">
                </div>
            </div>
        </div>

        <div class="items">

        </div>
    </div>
</div>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Film from "./js/film.js";

    const film = new Film();
    film.init();


    /*
    User example ---


    import Users from "./js/users.js"

    const users = new Users();

    users.init();
    */
    /* kage eksemplet

    import Kage from "./js/promise.js";

    const kage = new Kage();

    kage.kageEllerHvad();
    */
  /*  kage.returVenterPaaSvar(true).then((response) => {

        console.log(response);

        kage.hvadVarStoerelsenPaaSandt('large').then((response)=>{
            console.log(response);

        }).catch((error) => {

            console.log(error);

        });

    }).catch((error)=>{
        console.log(error);
    });

   */
</script>
</body>
</html>
