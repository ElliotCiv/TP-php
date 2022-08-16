<?php
require_once "../app/models/LivreManager.php";
require_once '../app/controllers/globalController.php';

class LivreController extends GlobalController{
    private $livreManager;
    public function __construct()
    {
        $this->livreManager = new LivreManager();
        $this->livreManager->chargementLivres();
    }
    public function afficherLivres(){
        $liste=$this->livreManager->getListe();
        require_once '../app/views/livresView.php';
    }
    public function afficherLivresbis(){
        $liste=$this->livreManager->getListeComplete();
        require_once '../app/views/livresView.php';
    }
    public function afficherUnLivre($id){
        $livre=$this->livreManager->getLivreById($id);
        require_once '../app/views/livresLire.php';
    }
    public function ajoutLivre(){
        require_once '../app/views/livresAjouter.php';
    }
    public function ajoutLivreValidation(){
        $img = $_FILES['img'];
        $pathImg = 'C:\xampp\htdocs\TP-MVC\assets/php/public/img/';
        $titre = $_POST["titre"];
        $nomImg=$this->ajoutImg($titre,$img,$pathImg);
        $this->livreManager->ajoutLivreBdd($titre,$_POST['nbrePages'],$nomImg);
        header('Location: http://localhost/TP-MVC/assets/php/public/livres');
    }
    public function supprimerLivre($id){
        $img = $this->livreManager->getLivreById($id)[2];
        unlink("../img/".$img);
        $this->livreManager->supprimerLivreBDD($id);
        header('Location: http://localhost/TP-MVC/assets/php/public/livres');
    }
    public function modifierLivre($id){
        $livre = $this->livreManager->getLivreById($id);
        require_once "../app/views/livresModifier.php";
    }
    public function modifierLivreValid(){
        if($_FILES["img"]['name']!="" && $_FILES["img"]['name']!=$_POST["ancienneImg"]){
            unlink("../img/".$_POST['ancienneImg']);
            $pathImg = 'C:\xampp\htdocs\TP-MVC\assets/img/';
            $imgtoadd=$this->ajoutImg($_POST['titre'],$_FILES['img'],$pathImg);
        }
        else{
            $imgtoadd = $_POST['ancienneImg'];
        }
        $this->livreManager->modifierLivreBDD($_POST['id'],$_POST['titre'],$_POST['nbrePages'],$imgtoadd);
        
        header('Location: http://localhost/TP-MVC/assets/php/public/livres');
    }
}