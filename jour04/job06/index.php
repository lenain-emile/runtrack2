<?php
$message = "";

if (isset($_GET["Nombre"])){
  $valeurs = $_GET["Nombre"];

  if ($valeurs % 2 == 0){
    $message = "Ce nombre est pair";
  }
  else {
    $message = " ce nombre est impair";
  }
}
echo $message
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test $_POST</title>
</head>
<body>
    <form action="" method="GET">
        <label for="Nombre">numéro :</label>
        <input type="number" id="Nombre" name="Nombre"><br><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>