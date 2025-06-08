<?php
class BookController {
    private $model;
    public function __construct() {
        include_once '../config/database.php';
        include_once '../models/Book.php';
        $this->model = new Book($pdo);
    }
    public function getBooks() {
        return $this->model->getAll();
    }
}
?>