<?php
// Définir le mot de passe
$password = "ton_mot_de_passe"; // Remplace "ton_mot_de_passe" par le mot de passe que tu souhaites

// Vérifier si le mot de passe est correct
if (isset($_POST['password']) && $_POST['password'] === $password) {
    // Afficher les fichiers PDF disponibles
    $files = scandir('pdfs');
    echo "<h1>Liste des PDF</h1><ul>";
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            echo "<li><a href='pdfs/$file' download>$file</a></li>";
        }
    }
    echo "</ul>";
} else {
    // Rediriger vers la page de connexion si le mot de passe est incorrect
    echo "<p>Mot de passe incorrect. <a href='index.html'>Réessayer</a></p>";
}
?>
