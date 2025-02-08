<?php
session_start();
$user = $_POST["first_name"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice PHP</title>
</head>
<body>
    <form action="exercice.php" method="post">
        <p>Votre nom : <input type="text" name="first_name" value="<?= htmlspecialchars($nom) ?>" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

</body>
</html>
