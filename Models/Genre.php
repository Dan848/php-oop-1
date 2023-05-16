<?php

class Genre
{
    public array $genre = [];

    public bool $adults_only;

    public function __construct(array $genre, bool $adults_only)
    {
        $this->genre = $genre;
        $this->adults_only = $adults_only;
    }

}