<?php
// Initialisation du compteur à zéro
$nombre_arguments = 0;

// Parcourir le tableau $_GET pour compter manuellement les arguments
foreach ($_GET as $cle => $valeur) {
    if (isset($cle)) {
        $nombre_arguments++;
    }
}
echo "Nombre d'arguments passés via \$_GET : " . $nombre_arguments . "<br>";

if ($nombre_arguments > 0) {
    echo "Détails des arguments :<br>";
    foreach ($_GET as $cle => $valeur) {
        echo $cle . " : " . $valeur . "<br>";
    }
} else {
    echo "Aucun argument passé via \$_GET. ";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_GET</title>
</head>
<body>
    <form action="" method="GET">
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

