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
            </div>
        </div>
    </nav>

    <img src="images/totoro2.png" id="totorophoto">

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
