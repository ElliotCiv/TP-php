
<?php
    ob_start();
?>
<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<form action="<?=URL?>livres/modifValider" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <label for="titre">Titre du livre : </label><br>
    <input type="text" name="titre" id="" value="<?=$livre[0]?>"><br><br>
    <label for="nbrePages">Nombre de pages du livre : </label><br>
    <input type="text" name="nbrePages" id="" value="<?=$livre[1]?>"><br><br>
    <label for="ancienneImg">Premiere de couverture du livre actuelle : </label><br>
    <input type="hidden" name="ancienneImg" value="<?= $livre[2] ?>">
    <img src="../../img/<?=$livre[2]?>" alt="" name="ancienneImg" width="200px">
    <br>
    <input type="file" name="img" id=""><br><br>
    <button type="submit">Valider</button>
</form>

<?php
    $titre= "Modification du livre : ".$livre[0];
    $content = ob_get_clean();
    require_once "template.php";
?>
