<?php
// Array of movies, with IDs matching those used in index.php
$movies = [
    1 => ['title' => 'LIGHT SHOP', 'trailer' => 'https://www.youtube.com/watch?v=wFATeqKxa1Q'],
    2 => ['title' => 'WHEN THE PHONE RINGS', 'trailer' => 'https://www.youtube.com/watch?v=Y4P-z1Qy6xI'],
    3 => ['title' => 'VENOM: THE LAST DANCE', 'trailer' => 'https://www.youtube.com/watch?v=__2bjWbetsA'],
    4 => ['title' => 'FLOWER OF EVIL', 'trailer' => 'https://www.youtube.com/watch?v=C1Cp24Ngdfc'],
    5 => ['title' => 'THE TRUNK', 'trailer' => 'https://www.youtube.com/watch?v=0qd8mqLpv38'],
    6 => ['title' => 'HAPPINESS', 'trailer' => 'https://www.youtube.com/watch?v=gqhUlldiLEo'],
    7 => ['title' => 'WHILE YOU WERE SLEEPING', 'trailer' => 'https://www.youtube.com/watch?v=8_rEZV3n3mk'],
    8 => ['title' => 'EVE', 'trailer' => 'https://www.youtube.com/watch?v=NuDbeCTYJBI'],
    9 => ['title' => 'TAXI DRIVER', 'trailer' => 'https://www.youtube.com/watch?v=Hnnhq_fTV5c'],
    10 => ['title' => 'REVENGE OF OTHERS', 'trailer' => 'https://www.youtube.com/watch?v=9gjMIeMksnQ'],
    11 => ['title' => 'VAGABOND', 'trailer' => 'https://www.youtube.com/watch?v=tyhnEHCUtv4'],
    12 => ['title' => 'REBORN RICH', 'trailer' => 'https://www.youtube.com/watch?v=6lGImvjI_Sw'],
];

// Retrieve the movie ID from the URL
$id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT);
$movie = $movies[$id] ?? null;

// If the movie is not found, display an error message
if (!$movie) {
    echo "<div class='container mt-5 text-center'><h1>Movie Not Found</h1><a href='index.php' class='btn btn-secondary'>Back to Home</a></div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($movie['title']); ?> - Trailer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center"><?php echo htmlspecialchars($movie['title']); ?> - Trailer</h1>
        <div class="d-flex justify-content-center mt-4">
            <iframe width="560" height="315" src="<?php echo htmlspecialchars($movie['trailer']); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</body>
</html>
