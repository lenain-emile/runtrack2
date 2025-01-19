<?php

$message = ""; // Variable pour stocker le message de réponse

// Vérifier si le formulaire est soumis
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Récupérer les valeurs des champs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier les conditions
    if ($username === "John" && $password === "Rambo") {
        $message = "C'est pas ma guerre";
    } else {
        $message = "Votre pire cauchemar";
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
    <form action="" method="POST">
        <label for="username">username :</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">password :</label>
        <input type="text" id="password" name="password"><br><br>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
