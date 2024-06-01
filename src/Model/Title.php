<?php

declare(strict_types=1);

class Title
{
    private array $ratings;
    public function __construct(
        public readonly string $name,
        public readonly int $releaseYear,
        public readonly Genre $genre,
    ) {

        $this->ratings = [];
    }

    public function rate(float $rating): void
    {
        $this->ratings[] = $rating;
    }

    public function average(): float
    {
        return array_sum($this->ratings) / count($this->ratings);
    }

    public function durationInMinutes(): int
    {
        return 0;
    }
}
