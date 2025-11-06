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
?>