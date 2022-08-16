<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-MVC Index</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/TP-MVC/assets/php/public">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://localhost/TP-MVC/assets/php/public/livres">Livres</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <h1 class="rounded border border-dark m-2 p-2 text-center text-white bg-info">
        <?=$titre?>
    </h1>
    <?php
    echo $content;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>