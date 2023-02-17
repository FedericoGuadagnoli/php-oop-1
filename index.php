<?php

class Movie
{
    public $title;
    public $description;
    public $cast;
    public $year;

    public function __construct($title, $description, $year, $cast = array())
    {
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
        $this->cast = $cast;
    }

    public function addActor(...$actors)
    {
        $this->cast = array_merge($this->cast, $actors);
    }
}

function printMovie(Movie $movie)
{
    echo "<h1>{$movie->title}</h1>";
    echo "<p>{$movie->description}</p>";
    echo "<p>Cast:</p>";
    echo "<ul>";
    foreach ($movie->cast as $actor) {
        echo "<li>$actor</li>";
    }
    echo "</ul>";
    echo "<p>Year: {$movie->year}</p>";
}


$movie1 = new Movie('Scream', 'Chi urla, muore...', '1996');
$movie1->addActor('Neve Campbell', 'Courteney Cox', 'David Arquette', 'Matthew Lillard', 'Rose McGowan');

printMovie($movie1);


$movie2 = new Movie('Scream 2', 'Il ritorno di Ghost Face', '1997');
$movie2->addActor('Neve Campbell', 'Courteney Cox', 'David Arquette', 'Jamie Kennedy', 'Laurie Metcalf');

printMovie($movie2);


$movie3 = new Movie('Scream 3', 'Il primo stabilisce le regole, il secondo le infrange, nel terzo dimenticatele...', '1999');
$movie3->addActor('Neve Campbell', 'Courteney Cox', 'David Arquette', 'Parker Posey', 'Patrick Dempsey');

printMovie($movie3);
