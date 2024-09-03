<?php
require_once __DIR__ . '/Movie/movie.php';
require_once __DIR__ . '/data/db.php';





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
<?php foreach($movies as $movie): ?>
            <div>
                 <h1>Titolo : <?php $movie->printName(); ?></h1>
                 <h2>>Anno : <?php $movie->printData(); ?></h2>
                             
            </div>
        <?php endforeach; ?>

    
</body>
</html>