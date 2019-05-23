<?php
	session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
</head>

<body class="bg-light">
    <main class="container-fluid">
        <div class="row navbar">
            <image class="col-3 logo" src="logotype%20black%20bkg.svg"></image>
            <a href="play.php">Spela</a>
            <a href="edit.php">Redigera</a>
            <div class="col-6"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <image src="Artboard%201.svg" style="max-width: 100%; max-height:100%;"></image>

                <h1 class="display-4">Välkommen!</h1>
                <p>La Traviata är en opera skriven av Giuseppe Verdi. Den handlar om en kurtisan från 1800-talet som ifrågasätter sitt levnadssätt när hon möter kärleken; hon slits mellan den sanna kärleken och nåd för sin älskade. <br> <br> Detta är ett textbaserat spel som också är baserat på Operan La Traviata. <br><br> Tryck på spela för att komma igång!</p>

                <a class="btn btn-dark btn-lg" href="play.php">
                Spela
            </a>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
