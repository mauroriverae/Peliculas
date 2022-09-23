<?php
    class MovieView{
        function printMovies($genre, $movies) {       
            echo "<h1> lista por genero: $genre</h1>";
            echo "<a href='index.html'>Volver</a>";
    
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
    
        }
    }