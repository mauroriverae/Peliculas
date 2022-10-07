<?php
    include_once "movies.model.php";
    include_once "movies.view.php";
    //atributo de la clase
    class MoviesController {
        private $model;
        private $view; 
        function __construct(){
            $this->model = new MovieModel;
            $this->view = new MovieView;
        }   
        function showMoviesByGenre(){
            if(!isset($_GET ['genre'])||empty($_GET['genre'])) {
                $this->view->showError();
                die; 
            }
            $genre = $_GET['genre'];    
            $movies = $this->model -> getMoviesByGenre($genre);
            $this->view->printMovies($genre, $movies);
            include "templates/footer";
        }
    }