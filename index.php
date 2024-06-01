<?php

require __DIR__ . '/src/Enum/Genre.php';
require __DIR__ . '/src/Model/Title.php';
require __DIR__ . '/src/Model/Movie.php';
require __DIR__ . '/src/Model/Series.php';
require __DIR__ . '/src/Services/MarathonCalculator.php';
require __DIR__ . '/src/functions.php';

echo "Bem-vindo ao ScreenMatch\n";

$movie = new Movie(
    'Top Gun - Maverick',
    2021,
    Genre::ACTION,
    180,
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

echo "Série" . PHP_EOL;

$series = new Series(
    "Lost",
    2007,
    Genre::DRAMA,
    10,
    20,
    30
);
echo $series->name . PHP_EOL;
echo $series->releaseYear . PHP_EOL;

$series->rate(8);

echo $series->average(). PHP_EOL;


$calculator = new MarathonCalculator();
$calculator->insert($movie);
$calculator->insert($series);
$duration = $calculator->duration();

echo "Para essa maratona, você precisa de $duration minutos";


//Inheritance
