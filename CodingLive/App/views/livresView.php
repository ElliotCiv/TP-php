<?php 
ob_start();
?>


<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    foreach($livres as $livre) {
    ?>
    <tr>
        <td class="align-middle"><img src="<?=URL?>public/images/<?=$livre->getImage()?>" alt="" width="60px;"></td>
        <td class="align-middle"><a href="<?=URL?>livres/lire/<?=$livre->getId()?>"><?= $livre->getTitle() ?></a></td>
        <td class="align-middle"><?= $livre->getPages() ?></td>
        <td class="align-middle"><a href="<?=URL?>livres/modifier/<?=$livre->getId()?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a class="btn btn-danger" href="<?=URL?>livres/supprimer/<?=$livre->getId()?>">Supprimer</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<a href="<?=URL?>livres/ajouter" class="btn btn-success d-block">Ajouter</a>

<?php

$title = "Liste des livres";
$content = ob_get_clean();
require_once "template.php";