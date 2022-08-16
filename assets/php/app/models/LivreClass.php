<?php

class Livres{
    private $title;
    private $nbrePages;
    private $img;
    /* public static $listeLivre; */
    public function __construct($title,$nbrePages,$img)
    {
        $this->title=$title;
        $this->nbrePages=$nbrePages;
        $this->img=$img;

        /* return self::$listeLivre[]=$this; */
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getNbrePages(){
        return $this->nbrePages;
    }
    public function setNbrePages($nbrePages){
        $this->nbrePages = $nbrePages;
    }
    public function getImg(){
        return $this->img;
    }
    public function setImg($img){
        $this->img = $img;
    }
}
