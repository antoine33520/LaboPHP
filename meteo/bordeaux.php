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
    <?php for($i = 0; $i < 5; $i++) { ?>
        <img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_<?=$i?>.png" /> <br> <?php }
    ?>
</body>
</html>
