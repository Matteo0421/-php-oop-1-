<?php 
require_once __DIR__ . '/Model/Movie.php';


$movies = [
  new Movie('Avatar il film', '2010', 'James Cameron', 'Sam Worthington'),
  new Movie('Rocky Balboa', '2006', 'Sylvester Stallone', 'Sylvester Stallone')
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First OOP MOVIE</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <h1 class="text-center mb-5" >I MIEI FILM PREFERITI</h1>

  <div class="row">
      <?php foreach ($movies as $movie): ?>
        <div class="col-md-6">
          <div class="card mt-3">
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie->title; ?></h5>
              <p class="card-text">Titolo: <?php echo $movie->title; ?></p>
              <p class="card-text">Anno: <?php echo $movie->year; ?></p>
              <p class="card-text">Regista: <?php echo $movie->director; ?></p>
              <p class="card-text">Protagonista: <?php echo $movie->protagonist; ?></p>
              <h6 class="card-subtitle mb-2 text-muted"><?php $movie->getTitleHero() ?></h6>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

</body>
</html>