<?php
    $counter = 0;
    $max = 2;   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 3</title>
</head>
<body>
    <?php

       while ($counter < 20) {
           $counter = $counter * $max;
           echo "$counter <br>";
            $counter++;
       }
    ?>
</body>
</html>