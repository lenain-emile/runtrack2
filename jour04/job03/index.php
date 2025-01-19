<?php
$nombre_arguments = 0;
if (isset($_POST)){
foreach ($_POST as $cle => $valeur){
  $nombre_arguments++;
 }
}
echo "Nombre d'arguments passés via \$_POST : " . $nombre_arguments . "<br>";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_POST</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
