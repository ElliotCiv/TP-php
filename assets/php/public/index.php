
<?php
try{
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF']));

if(empty($_GET['page'])){
    require_once '../app/views/accueilView.php';
}
else{
    $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);
    switch($url[0]){
        case("accueil"):
            require_once '../app/views/accueilView.php';
            break;
        case ("livres"):
            require_once '../app/controllers/LivreController.php';
            $new = new LivreController();
            if(!isset($url[1])){
                $liste = $new->afficherLivresbis();
            }
            else{
                switch($url[1]){
                    case("modifier"):
                        $id=$_GET['id'];
                        $new->modifierLivre($id);
                        break;
                    case("ajouter"):
                        require_once "../app/views/livresAjouter.php";
                        break;
                    case("supprimer"):
                        $id=$_POST['supprimer'];
                        $new->supprimerLivre($id);
                        break;
                    case("lire"):
                        if(!isset($_GET['id'])){
                            require_once "../app/views/livresLire.php";
                            break;
                        }
                        else{
                            $id=$_GET['id'];
                            $new->afficherUnLivre($id);
                            break;
                        }
                    case("valider"):
                        $new->ajoutLivreValidation();
                        break;
                    case("modifValider"):
                        $new->modifierLivreValid();
                        break;
                    
                    default:
                        throw new Error("mauvais url") ;
                        break;
                }
            }
            break;
        default:
            throw new Error("mauvais url");
            break;
    }
}}catch(Error $e){
    echo($e);
} 