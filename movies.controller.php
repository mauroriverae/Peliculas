<?php
    include_once "movies.model.php";
    include_once "movies.view.php";
    class MoviesController {
        function showMoviesByGenre(){
            if(!isset($_GET ['genre'])||empty($_GET['genre'])) {
                echo "<h2> error genero no especificado</h2>";
                die; 
            }
            $genre = $_GET['genre'];    
    
    
            //le pido al model las peliculas
            $model = new MovieModel();
            $movies = $model -> getMoviesByGenre($genre);
    
            //genero la lista
            $view = new MovieView();
            $view->printMovies($genre, $movies);
        }
    }