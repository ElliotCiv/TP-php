
<?php
    ob_start();
?>

<head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<?php
if(!empty($id)){
?>

<main>
    <img src="../../img/<?=$livre[2]?>" alt="" width="300px;">
    <section>
        <p>Titre : <?=$livre[0]?></p>
        <p>Nombre de pages : <?=$livre[1]?></p>
    </section>
</main>
<?php
;}
?>
<?php
    if(empty($id)){
        $titre= "Aucun livre selectionné";
    }
    else{
        $titre=$livre[0];
    }
    $content = ob_get_clean();
    require_once "template.php";
?>
