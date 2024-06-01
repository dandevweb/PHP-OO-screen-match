<?php

require __DIR__ . '/src/Enum/Genre.php';
require __DIR__ . '/src/Model/Movie.php';
require __DIR__ . '/src/functions.php';

echo "Bem-vindo ao ScreenMatch\n";

$movie = new Movie(
    'Top Gun - Maverick',
    2021,
    Genre::ACTION
);

$movie->rate(7.8);
$movie->rate(8.5);
$movie->rate(9.0);
$movie->rate(6.5);

var_dump($movie);

echo "A média das notas é: ";

echo $movie->average();

echo "\n";

echo $movie->releaseYear;
echo "\n";

echo $movie->name;
echo "\n";
