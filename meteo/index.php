<?php include 'parametres.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Météo</title>
    <style> <?php echo $css; ?> </style>
</head>
<body>
    La date d'aujourd'hui est <?php echo $date; ?>.
    <br>
    <a href="bordeaux.php" alt="Météo Bordeaux">Météo de Bordeaux</a>
    <br>
    <a href="paris.php" alt="Météo Paris">Météo de Paris</a>
</body>
</html>