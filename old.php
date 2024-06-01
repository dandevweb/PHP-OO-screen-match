<?php

require __DIR__ . '/src/Model/Movie.php';
require __DIR__ . '/src/functions.php';

echo "Bem-vindo ao Screen Match\n";

$movieName = "Top Gum - Maverick";
$releaseYear = 2022;
$ratingQty = $argc - 1;
$ratings = [];

for ($i = 1; $i < $argc; $i++) {
    $ratings[] = (float) $argv[$i];
}

$movieRating = array_sum($ratings) / $ratingQty;
$primePlan = true;

$includedInPlain = includedInPlan($primePlan, $releaseYear);

echo "Nome do filme: $movieName\n";
echo "Avaliação do filme: $movieRating\n";
echo "Ano de lançamento: $releaseYear\n";

showReleaseMessage($releaseYear);

$genre = match($movieName) {
    'Top Gun - Maverick' => 'ação',
    'The Batman' => 'super-heroi',
    'The Matrix 4' => 'comédia',
    'Jurassic World: Dominion' => 'ventura',
    default => 'Desconhecido',
};

echo "Gênero do filme: $genre\n";

$movie = createMovie(
    rating: 7.8,
    genre: 'ação',
    releaseYear: 2021,
    name: 'Top Gun - Maverick'
);

echo $movie->releaseYear;

var_dump($ratings);
sort($ratings);
var_dump($ratings);
$minRating = min($ratings);
var_dump($minRating);

var_dump($movie->name);
$twoPointsPosition = strpos($movie->name, ':');
var_dump($twoPointsPosition);

var_dump(substr($movie->name, 0, $twoPointsPosition));

$movieasJson = json_encode($movie);
file_put_contents(__DIR__ . '/movie.json', $movieasJson);
