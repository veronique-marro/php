
<?php

$identifiantEnregistre = 'admin';
$motdepasseHash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je'; // Mot de passe : secret123

$identifiant = $_POST['identifiant'] ?? '';
$motdepasse = $_POST['pass'] ?? '';


if (!empty($identifiant) && !empty($motdepasse)) {

    if ($identifiant === $identifiantEnregistre) {

    
        if (password_verify($motdepasse, $motdepasseHash)) {
            echo "Connexion réussie ! Bienvenue, $identifiant.";
        } else {
            echo "Mot de passe incorrect.";
        }

    } else {
        echo "Identifiant incorrect.";
    }

} 
?>