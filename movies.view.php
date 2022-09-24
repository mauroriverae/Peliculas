<?php
    class MovieView{
        function printMovies($genre, $movies) {
            include_once "templates/headers.php";       
            echo "<h1> lista por genero: $genre</h1>";
            echo "<a class='btn btn-info' href='index.html'>Volver</a>";
    
            echo "
            <table class='table table-striped'>
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

        }
        function showError(){
            echo "<h2>Error! genero no especificado</h2>";
        }
    }