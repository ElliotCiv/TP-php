<?php

namespace App\controllers;

use App\models\LivreManager;

class LivreController {

    private $livreManager;

    public function __construct() {
        $this->livreManager = new LivreManager();
        $this->livreManager->loadBooks();
    }
    
    public function displayBooks() {
        $livres = $this->livreManager->getBooks();
        require "views/livresView.php";
    }

}