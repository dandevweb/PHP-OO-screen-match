<?php

declare(strict_types=1);

class MarathonCalculator
{
    private int $marathonDuration = 0;

    public function insert(Title $title): void
    {
        $this->marathonDuration += $title->durationInMinutes();
    }

    public function duration(): int
    {
        return $this->marathonDuration;
    }

}
