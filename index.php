<?php
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTIONS</title>
</head>
<body>
<main class="main-content pt-3 pb-5">
        <div class="container">
            <div class="row">
                <ul>
                <?php
                foreach($productions as $production){
                ?>
                    <li >
                        <div class="card">
                            <h4><?php echo $production->title;?></h4>
                            <p><?php echo $production->language;?></p>
                            <p><?php echo $production->vote;?></p>
                            <p><?php echo $production->genre->name;?></p>
                            <p><?php echo $production->genre->description;?></p>
                        </div>
                    </li>
                    <?php
                    }
                    foreach($movies as $movie){
                    ?>
                    <li>
                        <div class="card ">
                            <h4><?php echo $movie->title;?></h4>
                            <p><?php echo $movie->language;?></p>
                            <p><?php echo $movie->vote;?></p>
                            <p><?php echo $movie->genre->name;?></p>
                            <p><?php echo $movie->genre->description;?></p>
                            <p><?php echo $movie->profits;?></p>
                            <p><?php echo $movie->duration;?></p>
                        </div>
                    </li>
                    <?php    
                    }
                    foreach($tv_series as $tv_serie){
                    ?>
                    <li>
                        <div class="card ">
                            <h4><?php echo $tv_serie->title?></h4>
                            <p><?php echo $tv_serie->language;?></p>
                            <p><?php echo $tv_serie->vote;?></p>
                            <p><?php echo $tv_serie->genre->name;?></p>
                            <p><?php echo $tv_serie->genre->description;?></p>
                            <p><?php echo $tv_serie->seasons;?></p>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>

</body>
</html>