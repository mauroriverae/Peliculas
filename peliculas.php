<?php
    if(!isset($_GET ['genre'])||empty($_GET['genre'])) {
        echo "<h2> error genero no especificado</h2>";
        die; 
    }

    $genre = $_GET['genre'];

    echo "<h1> lista por genero: $genre</h1>";
    echo "<a href='index.html'>Volver</a>";

    $db = new PDO ('mysql:host=localhost;'.'dbname=db_movies;charset=utf8','root', '');
    $query = $db->prepare('SELECT * FROM movies WHERE genre = ?');
    $query->execute([$genre]); 
    $movies = $query->fetchall(PDO::FETCH_OBJ);


    echo "
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Año</th>
                <th>Estduio</th>
            </tr>
        </thead>
        <tbody>
    ";
    foreach($movies as $movie) {
        echo "
            <tr>
                <td>$movie->title</td>
                <td>$movie->year</td>
                <td>$movie->studio</td>
            </tr>
        ";
    }
    echo "
        </tbody>
    </table>
    ";  