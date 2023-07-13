<?php

include_once('model/model.php');

class BookController {

    public $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function load() {
        if (!isset($_GET['book'])) {
            // no special book is requested, we'll show a list of all available books
            $books = $this->model->getBookList();
            include 'view/bookList.php';
        } else {
            // show the requested book
            $book = $this->model->getBook($_GET['book']);
            include 'view/bookView.php';
        }
    }
}