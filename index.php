<?php
class Movie{
    //dichiaro le variabili d-istanza
    public $title;
    public $year;
    public $cast;
    public $genre;
    public $language;
    public $length;

    //dichiaro un metodo
    

    //creo la funzione costruttore
    public function __construct($movieTitle, $movieYear, $movieCast, $movieGenre, 
    $movieLanguage, $movieLength)
    {
        $this -> title = $movieTitle;
        $this -> year = $movieYear;
        $this -> cast = $movieCast;
        $this -> genre = $movieGenre;
        $this -> language = $movieLanguage;
        $this -> length = $movieLength;
    }
}