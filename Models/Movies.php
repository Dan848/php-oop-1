<?php
include __DIR__. '/Genre.php';
class Movies
{
    public int $id;
    public string $title;
    public int $relase_year;

    public Genre $genre;

    public string $director;

    public int $rating;

    public function __construct(int $id, string $title, int $relase_year, Genre $genre, string $director, int $rating)
    {
        $this->id = $id;
        $this->title = $title;
        $this->relase_year = $relase_year;
        $this->genre = $genre;
        $this->director = $director;
        $this->rating = $rating;
    }
}