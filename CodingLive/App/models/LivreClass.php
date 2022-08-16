<?php

namespace App\models;

class LivreClass {
    private $id;
    private $title;
    private $image;
    private $pages;

    public function __construct($id, $title, $image, $pages)
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->pages = $pages;
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of pages
     */ 
    public function getPages()
    {
        return $this->pages;
    }
}