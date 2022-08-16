<?php
abstract class GlobalController{
    public static function ajoutImg($titre,$file,$repertoire){
        if (!getimagesize($file['tmp_name'])) {
            throw new Error("Mauvais type de fichier uploadé");
        }
        else{
            $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
            if ($extension !== "jpg" && $extension !== "jpeg") {
                throw new Error("Mauvais format de l'image");
            }
            else{
                $nomImg = str_replace(" ","-",$titre);
                move_uploaded_file($file['tmp_name'], $repertoire.$nomImg.'.'.$extension);
                return ($nomImg.'.'.$extension);
            }
        }
    }
} 