<?php

class Categories
{
    public $id;
    public $name;


    /**
     * Categories constructor
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqCategory = $db->prepare('SELECT *FROM categories WWHERE id = ?');
        $reqCategory->execute([$id]); 
        $data = $reqCategory->fetch();

        $this->id = $id;
        $this->name = $data['name'];

    }


    /**
     * Returns all categories
     * @return array
     */
    static function getAllCategories () {

        global $db;
        $reqCategories = $db->prepare('SELECT * FROM categories');
        $reqCategories->execute([]);
        return $reqCategories->fetchAll();
    }
}