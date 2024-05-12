
<?php
require_once __DIR__ . '/models/genre.php';
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/tv_series.php';


$productions = [
    new Production('Venom', 'English', 7, new Genre('Action','Good')),
    new Production('Venom','English' , 7, new Genre('Action','Good')),
    new Production('Jumanji','English',8, new Genre('Fantasy','Good')),
    new Production('Jumanji','English',8, new Genre('Fantasy','Good'))
];

$movies = [
    new Movie('Up', 'English', 8, new Genre('Cartoon', 'Good'), 1000000, 1),
    new Movie('Up', 'English', 8, new Genre('Cartoon', 'Good'), 1000000, 1),
    new Movie('Up', 'English', 8, new Genre('Cartoon', 'Good'), 1000000, 1),
    new Movie('Up', 'English', 8, new Genre('Cartoon', 'Good'), 1000000, 1)
];

$tv_series = [
    new TvSeries('The Walkin Dead','English',9 ,new Genre('Horror','Good'), 5),
    new TvSeries('The Walkin Dead','English',9 ,new Genre('Horror','Good'), 5),
    new TvSeries('The Walkin Dead','English',9 ,new Genre('Horror','Good'), 5),
    new TvSeries('The Walkin Dead','English',9 ,new Genre('Horror','Good'), 5)
];