<?php

declare(strict_types=1);

function showReleaseMessage(int $releaseYear): void
{
    if ($releaseYear < 2020) {
        echo "Filme antigo\n";
    } else {
        echo "Filme novo\n";
    }
}

function includedInPlan(bool $primePlan, int $releaseYear): bool
{
    return $primePlan && $releaseYear < 2020;
}

function createMovie(string $name, int $releaseYear, string $genre, float $rating): Movie
{
    $movie = new Movie();
    $movie->name = $name;
    $movie->releaseYear = $releaseYear;
    $movie->genre = $genre;
    $movie->rating = $rating;

    return $movie;
}
