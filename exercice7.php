<?php
    $message = "<li>On tiens le bon bout. </li>"
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
    <ol>
        <?php
            for ($count=1; $count < 100 ; $count += 15) { 
                echo $message;
            }
        ?>
    </ol>
</body>
</html>