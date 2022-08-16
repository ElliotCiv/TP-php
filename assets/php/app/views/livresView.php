
<?php
    ob_start();
?>

<p>Livres</p>
<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    foreach($liste as $value){
        ?>
        <tr>
            <td class="align-middle"><img src="./img/<?php echo $value->img_livre ?>" alt="" width="60px;"></td>
            <td class="align-middle"><a href="<?=URL?>livres/lire&id=<?=$value->id_livre?>"><?php echo $value->titre_livre?></a></td>
            <td class="align-middle"><?php echo $value->nbrePages_livre?></td>
            <td class="align-middle"><a href="<?=URL?>livres/modifier&id=<?=$value->id_livre?>" class="btn btn-warning">Modifier</a></td>
            <form action="<?=URL?>livres/supprimer" method="POST">
                <td class="align-middle">
                    <button class="btn btn-danger" value="<?=$value->id_livre?>" name="supprimer">Supprimer</button>
                </td>
            </form>
        </tr>
        
    <?php
    }
    ?>
    
</table>
<a href="<?=URL?>livres/ajouter" class="btn btn-success d-block">Ajouter</a>
<?php
    $titre= "Livres";
    $content = ob_get_clean();
    
    require_once "template.php";
?>
