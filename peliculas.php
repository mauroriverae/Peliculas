<?php
    include_once 'movies.controller.php';

    //instancio un objeto del controlador
    $controller = new MoviesController();
    $controller->showMoviesByGenre();    
