<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Ghibli database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form method="post" action="insert.php">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodTitel">Produkt Titel</label>
                    <input class="form-control" type="text" name="data[prodTitel]" id="prodTitel" placeholder="Produkt titel" value="">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodGenre">Genre</label>
                    <input class="form-control" type="text" name="data[prodGenre]" id="prodGenre" placeholder="Genre" value="">

                </div>

            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodYear">Udgivelsesår </label>
                    <input class="form-control" type="number" step="0" name="data[prodYear]" id="prodYear" placeholder="Udgivelsesår" value="">

                </div>

            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="prodDes">Produkt Beskrivelse</label>
                    <textarea class="form-control" name="data[prodDes]" id="prodDes"></textarea>
                </div>



            <div class="col-12 col-md-6">

            </div>

        </div>
    </form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
