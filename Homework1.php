<?php
$movies = [
    ["name" => "Titanic", "year" => 1997],
    ["name" => "Interstellar", "year" => 2014],
    ["name" => "Batman", "year" => 2008],
    ["name" => "Avatar 2", "year" => 2022]
];

$recentMovieYear = 0;
$recentMovieName = "";
$mostRecent = [];

foreach ($movies as $movie) {
    if ($movie["year"] > $recentMovieYear) {
        $recentMovieYear = $movie["year"];
        $mostRecent = $movie; 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homework Array</title>
</head>
<body>

<h2>Movie List</h2>
<ul>
    <?php foreach ($movies as $movie) { ?>
        <li>Name: <?= $movie["name"] ?> - Released Date: <?= $movie["year"] ?></li>
    <?php } ?>
</ul>

<h3>Most Recent Movie:</h3>
<p>
    <?= $mostRecent["name"] . " (" . $mostRecent["year"] . ")" ?>
</p>

</body>
</html>
