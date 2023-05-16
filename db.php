<?php
include __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie(
        "1",
        "Avatar - La via dell'acqua",
        "https://upload.wikimedia.org/wikipedia/it/thumb/e/e1/Avatar_-_La_via_dell%27acqua.png/1920px-Avatar_-_La_via_dell%27acqua.png",
        2022,
        new Genre(["fantascienza", "azione", "avventura"], false),
        "James Cameron",
        8
    ),
    new Movie(
        "2",
        "Joker",
        "https://upload.wikimedia.org/wikipedia/it/f/f2/Joker_%28film_2019%29.png",
        2019,
        new Genre(["drammatico", "poliziesco", "thriller", "noir"], true),
        "Todd Phillips",
        9.4
    ),
    new Movie(
        "3",
        "Lupin III - Il castello di Cagliostro",
        "https://upload.wikimedia.org/wikipedia/it/1/1b/Logo_del_Castello_di_Cagliostro.PNG",
        1979,
        new Genre(["drammatico", "poliziesco", "thriller", "noir"], false),
        "Hayao Miyazaki",
        8.7
    ),
    
];