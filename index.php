<?php
require_once __DIR__ . '/utilities.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTIONS</title>
</head>
<body>
    <ul>
        <li>
            <h4><?php echo $venom->title;?></h4>
            <p><?php echo $venom->language;?></p>
            <p><?php echo $venom->vote;?></p>
        </li>
        <li>
            <h4><?php echo $jumanji->title;?></h4>
            <p><?php echo $jumanji->language;?></p>
            <p><?php echo $jumanji->vote;?></p>
        </li>
    </ul>
</body>
</html>