<?php
require_once "ModelClass.php";
require_once 'LivreClass.php';
class LivreManager extends Model{
    private $listeLivre;
    public function ajout($objet){
        $this->listeLivre[]=$objet;
    }
    public function getListe(){
        return $this->listeLivre;
    }
    public function getListeComplete(){
        return $this->chargementLivres();
    }
    public function chargementLivres(){
        $db = $this->getBdd();
        $sql = "SELECT * FROM Livres";
        $req = $db->prepare($sql);
        $req->execute([]);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        foreach ($data as $value){
            $livre = new Livres($value->titre_livre,$value->nbrePages_livre,$value->img_livre);
            $this->ajout($livre);
        }
        return $data;
    }
    public function getLivreById($id){
        foreach ($this->chargementLivres() as $objet){
            if(($id == ($objet->id_livre))){
                $livre = [$objet->titre_livre,$objet->nbrePages_livre,$objet->img_livre];
            }
        }
        return $livre;
    }
    public function ajoutLivreBDD($titre,$nbrePages,$image){
        $db = $this->getBdd();
        $sql = "INSERT INTO Livres (titre_livre, nbrePages_livre, img_livre) VALUES (:titre, :nbre, :img)";
        $req = $db->prepare($sql);
        $result = $req->execute([
            ":titre" => $titre,
            ":nbre" => $nbrePages,
            ":img" => $image
        ]);
        return $result;
    }
    public function supprimerLivreBDD($id){
        $db = $this->getBdd();
        $sql = "DELETE FROM Livres WHERE id_livre = :id";
        $req = $db->prepare($sql);
        $req->execute([
            ":id" => $id
        ]);
    }
    public function modifierLivreBDD($id,$titre,$nbPages,$image){
        $db = $this->getBdd();
        $sql = "UPDATE Livres SET titre_livre = :titre, nbrePages_livre = :nbPages, img_livre = :img WHERE id_livre = :id";
        $req = $db->prepare($sql);
        $req->execute([
            ":titre" => $titre,
            ":nbPages" =>$nbPages,
            ":img" => $image,
            ":id" =>$id
        ]);
    }
}
