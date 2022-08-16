<?php ob_start() ?>

<p>Accueil oui oui c'est l'accueil</p>

<?php

$title = "Page d'accueil";
$content = ob_get_clean();
require "template.php";