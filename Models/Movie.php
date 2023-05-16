<?php
include __DIR__. '/Genre.php';
class Movie
{
    public int $id;
    public string $title;
    public string $cover_image;
    public int $relase_year;

    public Genre $genre;

    public string $director;

    public int $rating;

    public function __construct(int $id, string $title, string $cover_image, int $relase_year, Genre $genre, string $director, int $rating)
    {
        $this->id = $id;
        $this->title = $title;
        $this->cover_image = $cover_image;
        $this->relase_year = $relase_year;
        $this->genre = $genre;
        $this->director = $director;
        $this->rating = $rating;
    }
}