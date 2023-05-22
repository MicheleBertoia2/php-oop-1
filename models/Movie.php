<?php 

class Movie {
  public $title;
  public $public_date;
  public $genres;
  public $adults;
  public $vote;

  function __construct($_title, $_public_date, $_adults,$_vote){
    $this->title = $_title;
    $this->adults = $_adults;
    $this->public_date = $_public_date;
    $this->vote = $_vote;
  }

  public function setGenres($array){
    $this->genres = $array;
  }
}

?>