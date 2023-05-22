<?php

require_once __DIR__ . '/models/Movie.php';

$movies = [
  new Movie("Dungeons & Dragons: l'onore dei ladri", 2023, false, 10, new MovieGenres(["comedy","fantasy","drama"])),
  new Movie("The Snatch: lo strappo", 2000, false, 10),
  new Movie("Basic Instinct", 1992, true, 8),
];