<?php

require "../vendor/autoload.php";

use App\controllers\LivreController;

$livreController = new LivreController();

define("URL", str_replace("public/index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));


try {
    if (empty($_GET['page'])) {
        require "../App/views/accueilView.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                echo "accueil1";
                break;
            case "livres":
                $livreController->displayBooks();
                break;
            case "test":
                echo "test";
                break;
            default:
                throw new Exception('Error 404, page not found');
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
