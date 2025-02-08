
<?php
// $variable = $_GET['first_name'];
// if(empty($variable)) {
//     echo "Bonjour anonyme";
// }else {
//     echo "Bonjour ".$variable;
// }
?> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $variable = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';

    // Redirection seulement si la valeur existe
    header("Location: exercice.php?first_name=" . urlencode($variable));
    exit(); // Arrêter l'exécution après la redirection
}

// Récupérer la valeur après redirection
$nom = isset($_GET['first_name']) ? trim($_GET['first_name']) : '';

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

    <p>
        <?php
        if (!empty($nom)) {
            echo "Bonjour " . htmlspecialchars($nom);
        } else {
            echo "Bonjour anonyme";
        }
        ?>
    </p>
</body>
</html> 
