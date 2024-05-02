<?php 
require_once __DIR__ . '/Model/Movie.php';

$avatar = new Movie ('Avatar il film', '2010', 'James Cameron', 'Sam Worthington' );

$rocky = new Movie ('Rocky Balboa', '2006', 'Sylvester Stallone', 'Sylvester Stallone');

var_dump($avatar);

var_dump($rocky)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First OOP MOVIE</title>
</head>
<body>
  <h1>I MIEI FILM PREFERITI</h1>

  <h2>Avatar</h2>
  <p>Titolo: <?php echo $avatar->title; ?></p>
  <p>Anno: <?php echo $avatar->year; ?></p>
  <p>Regista: <?php echo $avatar->director; ?></p>
  <p>Protagonista: <?php echo $avatar->protagonist; ?></p>
  <h4><?php $avatar->getTitleHero() ?></h4>

  <h2>Rocky Balboa</h2>
  <p>Titolo: <?php echo $rocky->title; ?></p>
  <p>Anno: <?php echo $rocky->year; ?></p>
  <p>Regista: <?php echo $rocky->director; ?></p>
  <p>Protagonista: <?php echo $rocky->protagonist; ?></p>
  <h4><?php $rocky->getTitleHero() ?></h4>

</body>
</html>