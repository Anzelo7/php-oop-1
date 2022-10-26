<?php

class Movie{
    public $title;
    public $director;
    public $genre;
    public $year;
    public $vote;

    function __construct($_title, $_director, $_genre, $_year){
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;

    }

    public function setVote($vote){
        $this->vote = $vote;
    }
    public function getvote(){
        return $this->vote;
    }
};



$movie1 = new Movie("Quei bravi ragazzi", "Martin Scorsese", "storico-drammatico", "1990", "10");
$movie2 = new Movie("Accattone", "Pier Paolo Pasolini", "drammatico", "1961", "10");

$movie1->setVote(10);
$movie2->setVote(10);

echo "<pre>";
var_dump($movie1);
echo "</pre>";

echo "<pre>";
var_dump($movie2);
echo "</pre>";

?>