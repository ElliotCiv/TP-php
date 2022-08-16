<?php

namespace App\models;

abstract class ModelClass {
    private $pdo;

    private function setDB() {
        $config = parse_ini_file(__DIR__ . "../../../config.ini");
        $this->pdo = new \PDO("mysql:host=".$config['DB_HOST'].";dbname=".$config['DB_NAME'].";charset=UTF8;","root","");
    }

    protected function getDB() {
        if ($this->pdo === null) {
            $this->setDB();
        }
        return $this->pdo;
    }
}