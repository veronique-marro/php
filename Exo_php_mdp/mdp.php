<?php 

$password = $_POST['pass']; 
$confirmPassword = $_POST['passs'];

if (!empty($password) && !empty($confirmPassword)) {
    
    if (strlen($password) < 6) {
        echo "Le mot de passe est trop court (minimum 6 caractères).";
    } elseif ($password !== $confirmPassword) {
        echo "Les deux mots de passe ne sont pas identiques.";
    } else {
        $motDePasseHash = password_hash($password, PASSWORD_DEFAULT);
        echo "Votre mot de passe a bien été mis à jour !<br>";
        echo "Mot de passe chiffré : <strong>$motDePasseHash</strong>";
    }

} else {
    echo "Veuillez remplir les deux champs.";
}
?>




