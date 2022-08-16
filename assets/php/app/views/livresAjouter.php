
<?php
    ob_start();
?>
<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<form action="<?=URL?>livres/valider" method="POST" enctype="multipart/form-data">
    <label for="titre">Titre du livre : </label><br>
    <input type="text" name="titre" id=""><br><br>
    <label for="nbrePages">Nombre de pages du livre : </label><br>
    <input type="text" name="nbrePages" id=""><br><br>
    <label for="img">Premiere de couverture du livre : </label><br>
    <input type="file" name="img" id=""><br><br>
    <button type="submit">Valider</button>
</form>

<?php
    $titre= "Ajout d'un Livre";
    $content = ob_get_clean();
    require_once "template.php";
?>
