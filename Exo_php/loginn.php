<?php 
session_start();

$users = [
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
    'bob'   => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];

$identifiant = $_POST['username'] ?? '';
$motdepasse = $_POST['password'] ?? '';

if (!empty($identifiant) && !empty($motdepasse)) {

    if (isset($users[$identifiant])) {

        if (password_verify($motdepasse, $users[$identifiant]['password'])) {
            $_SESSION['username'] = $identifiant;
            $_SESSION['role'] = $users[$identifiant]['role'];
            header('Location: dashboard.php');
            exit;
        } else {
            header('Location: failed.php');
            exit;
        }

    } else {
        header('Location: failed.php');
        exit;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./loginn.php" method="post"> 

    <label for="identifiant">Identifiant :</label><br>
    <input type="text" id="identifiant" name="username" placeholder="Entrez votre identifiant..." required><br><br>

    <label for="pass">Mot de passe :</label><br>
    <input type="password" id="pass" name="password" placeholder="Entrez votre mot de passe..." required><br><br>

    <input type="submit" name="ok" value="Connexion !">
</form>


</body>
</html>
