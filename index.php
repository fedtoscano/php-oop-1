<?php
class Movie{
    //dichiaro le variabili d-istanza
    public $title;
    public $director;
    public $year;
    public $cast;
    public $genre;
    public $language;
    public $length;

    //dichiaro un metodo che restituisce una breve presentazione del film
    public function makePresentation(){
        return "{$this->title} is a film made in the year {$this->year} by {$this->director}. Is a {$this->genre} movie and it is {$this->length} minutes long";
    }

    //creo la funzione costruttore
    public function __construct($movieTitle, $movieDirector, $movieYear, $movieCast, $movieGenre, 
    $movieLanguage, $movieLength)
    {
        $this -> title = $movieTitle;
        $this -> director = $movieDirector;
        $this -> year = $movieYear;
        $this -> cast = $movieCast;
        $this -> genre = $movieGenre;
        $this -> language = $movieLanguage;
        $this -> length = $movieLength;
    }
}

$thereWillBeBlood = new Movie("There Will Be Blood", "Paul Thomas Anderson", 2007, ["Daniel Day-Lewis", "Paul Dano"], 'Drama', "English", 158);

$inception = new Movie("Inception", "Christopher Nolan", 2010, ["Leonardo di Caprio", "Gina Ginetti"], 'Sciente Fiction', "english", 148);

echo $inception -> makePresentation();
echo $inception -> makePresentation();
