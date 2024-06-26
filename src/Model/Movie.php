<?php

declare(strict_types=1);

class Movie extends Title
{
    public function __construct(
        string $name,
        int $releaseYear,
        Genre $genre,
        public readonly int $duration
    ) {
        parent::__construct($name, $releaseYear, $genre);
    }

    #[Override]
    public function durationInMinutes(): int
    {
        return $this->duration;
    }
}
