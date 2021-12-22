<?php


// DEFINIZIONE DEL MODELLO-> CLASSE
class Movie {
    // PROPRIETA'
    public $titolo;
    public $regista;
    public $year;
    public $titolo_originale;
    public $actors;

    // COSTRUTTORE
    function __construct($titolo, $regista, $year, $titolo_originale) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->year = $year;
        $this->titolo_originale = $titolo_originale;
    }

    // METODI
    function setActors($actorsArray) {
        $this->actors = $actorsArray;
    }

    function getActors() {
        return $this->actors
    }

    $actorsArray = [
        'Daniel Radcliffe as Harry Potter'
        'Rupert Grint as Ron Weasley'
        'Emma Watson as Hermione Granger'
        'Robbie Coltrane as Rubeus Hagrid', 
        'Alan Rickman as Severus Piton', 
        'Maggie Smith as Minerva McGranitt',
        'Tom Felton as Draco Malfoy'
    ];
 	

}


// ISTANZE

// MOVIE 1
$movie1 = new Movie('Harry Potter e la pietra filosofale', 'Chris Columbus', '2001', 'Harry Potter and the Philosopher\'s Stone');
var_dump($movie1);


echo '<hr>';


// MOVIE 2
$movie2 = new Movie('Harry Potter e la camera dei segreti ', 'Chris Columbus', '2002', 'Harry Potter and the Chamber of Secrets');
var_dump($movie2);


echo '<hr>';


// MOVIE 3
$movie3 = new Movie('Harry Potter e il prigioniero di Azkaban', 'Alfonso Cuarón', '2004', 'Harry Potter and the Prisoner of Azkaban');
var_dump($movie3);


echo '<hr>';




