<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Catalog</title>
    <style>
body {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
}

h3 {
    font-family: "Lucida Handwriting", cursive;
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
}

.cinema-info, .search-results, .duration {
    font-family: 'Consolas';
    background: white;
    border: 1px solid #ddd;
    padding: 20px;
    margin: 15px 0;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.card {
    font-family: 'Consolas';
    background: #f8f9fa;
    padding: 12px;
    margin: 8px 0;
    border-radius: 6px;
    border-left: 4px solid #3498db;
}

.card.highlight {
    font-family: 'Consolas';
    background: #fff3cd;
    border-left-color: #ffc107;
}

</style>
</head>
<body>

<?php
Class Movie {
    public $name;
    public $duration;
    public $director;

    public function __construct($name, $duration, $director) {
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }
}

Class Cinema {
    public $name;
    public $city;
    public $movies = [];

    public function __construct($name, $city, $movies) {
        $this->name = $name;
        $this->city = $city;
        $this->movies = $movies;
    }

    public function displayMovies() {
        foreach ($this->movies as $movie) {
            echo "Movie: " . $movie->name . "<br>";
            echo "Duration: " . $movie->duration . " min<br>";
            echo "Director: " . $movie->director . "<br><br>";
        }
    }
    
    function getMovieDurations() {
        $longest = null;
        foreach ($this->movies as $movie) {
            if ($longest === null || $movie->duration > $longest->duration) {
                $longest = $movie;
            }
        }
        return $longest;
    } 
}
function searchByDirector ($directorName, $allCinemas) {
    $foundMovies = [];

    foreach($allCinemas as $cinema){
        foreach($cinema->movies as $movie) {
            if ($movie->director === $directorName) {

                $ifExist = false;

                foreach($foundMovies as $existingMovies) {
                    if ($existingMovies->name === $movie->name){
                        $ifExist = true;
                        break;
                    }
                }
                if(!$ifExist) {
                $foundMovies[] = $movie;
                }
            }
        }
    }
    return $foundMovies;
}


$Movie1 = new Movie("Home Alone", 103, "Chris Columbus"); 
$Movie2 = new Movie("The Godfather", 128, "Zach Cregger");  
$Movie3 = new Movie("Parasite", 132, "Bong Joon-ho");
$Movie4 = new Movie("Lord of the Rings", 178, "Peter Jackson");
$Movie5 = new Movie("Inception", 148, "Christopher Nolan");
$Movie6 = new Movie ("Harry Potter and the Chamber of Secrets", 174, "Chris Columbus");

$Cinema1 = new Cinema("CinePub", "Barcelona", [$Movie1, $Movie3, $Movie4, $Movie5]);
$Cinema2 = new Cinema("CineStar", "Madrid", [$Movie2, $Movie1, $Movie4, ]);
$Cinema3 = new Cinema("FilmHouse", "Valencia", [$Movie3, $Movie2, $Movie6]);
$Cinema4 = new Cinema("StarCinema", "Sevilla", [$Movie1, $Movie2, $Movie3, $Movie4]);

$allCinemas = [$Cinema1, $Cinema2, $Cinema3, $Cinema4];  

//mostar informacion Cinema 1
echo '<section class="cinema-info">';
echo "<h3>Películas en CinePub Barcelona:</h3>";
echo '<div class="card highlight">';
echo "<h3>{$Cinema1->name} - {$Cinema1->city}</h3>";
$Cinema1->displayMovies();
echo '</div>';
echo '</section>';

//mostar informacion CInema 2
echo '<section class="cinema-info">';
echo "<h3>Películas en CinePub Barcelona:</h3>";
echo '<div class="card highlight">';
echo "<h3>{$Cinema2->name} - {$Cinema2->city}</h3>";
$Cinema2->displayMovies();
echo '</div>';
echo '</section>';


//mostar pelicula con mas larga duracion
$longestMovie = $Cinema1->getMovieDurations();

echo '<section class="duration">';
echo "<h3>Longest Duration:</h3>";
echo '<div class="card">';
echo "<strong>{$Cinema1->name}:</strong> " . 
$longestMovie->name . " ({$longestMovie->duration} min)<br><br>";
echo '</div>';
echo '</section>';


// buscar por director 
$searchMovie = searchByDirector("Chris Columbus", $allCinemas);
echo '<section class="search-results">';
echo "<h3>Movies directed by Chris Columbus:</h3>";

foreach($searchMovie as $movie) {
    echo '<div class="card">';
    echo "<strong>{$movie->name}</strong> ({$movie->duration} min)";
    echo '</div>';
}
echo"</section";
?>
    
</body>
</html>