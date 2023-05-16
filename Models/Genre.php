<?php

class Genre
{
    public array $genres = [];

    public bool $adults_only;

    public function __construct(array $genres, bool $adults_only)
    {
        $this->genres = $genres;
        $this->adults_only = $adults_only;
    }
    public function getGenres() {
        $genres_list= "";
         foreach ($this->genres as $genre){
            $genres_list .="<span class='text-uppercase small me-1'>$genre</span>";
        }
        return $genres_list;
    }
    public function getAdultsOnly() {
        if ($this->adults_only) {
            return "<div class='small'>Vietato ai minori</div>";
        }
        else {
            return "<div class='small'>Per tutta la famiglia</div>";
        }
    }
}