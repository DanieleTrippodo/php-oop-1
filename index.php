<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classi OOP</title>
</head>




<body>
    <?php
    // Definizione della classe
    class Movie {
        // tutte le variabili della classe
        public $title;
        public $director;
        public $releaseYear;
        public $genre;

        // Costruttore che assegna le variabili
        public function __construct($title, $director, $releaseYear, $genre) {
            $this->title = $title;
            $this->director = $director;
            $this->releaseYear = $releaseYear;
            $this->genre = $genre;
        }

        // Metodo per ottenere la descrizione e i dati
        public function getDescription() {
            return "Title: " . $this->title . "<br>" .
                   "Director: " . $this->director . "<br>" .
                   "Release Year: " . $this->releaseYear . "<br>" .
                   "Genre: " . $this->genre . "<br>";
        }
    }

    // Creazione di due oggetti Movie
    $movie1 = new Movie("Inception", "Christopher Nolan", 2010, "Science Fiction");
    $movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, "Crime");

    // Stampa delle proprietà degli oggetti Movie
    echo $movie1->getDescription();
    echo $movie2->getDescription();
    ?>
</body>
</html>
