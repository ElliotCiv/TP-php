<?php

namespace App\models;

require_once "ModelClass.php";
require_once "LivreClass.php";

class LivreManager extends ModelClass {

    private $books;

    public function addBooks($book) {
        $this->books[] = $book;
    }

    public function loadBooks() {
        $sql = "SELECT * FROM livres";
        $stmt = $this->getDB()->query($sql);
        $data = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($data as $book) {
            $add = new LivreClass($book->id_livre,$book->titre_livre,$book->img_livre,$book->nbrePages_livre);
            $this->addBooks($add);
        }
    }

    public function getBooks()
    {
        return $this->books;
    }
}