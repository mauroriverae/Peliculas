<?php

class MovieModel{
    //obtiene la lista de peliculas de la DB segun genero
        function getMoviesByGenre($genre){
            $db = new PDO ('mysql:host=localhost;'.'dbname=db_movies;charset=utf8','root', '');
            $query = $db->prepare('SELECT * FROM movies WHERE genre = ?');
            $query->execute([$genre]); 
            $movies = $query->fetchall(PDO::FETCH_OBJ);
            return $movies;
        }
}