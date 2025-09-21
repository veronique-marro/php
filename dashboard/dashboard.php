<?php 
session_start(); 


    if (!isset($_SESSION['username']) || !isset($_SESSION['role'])){
            header('Location: login.php');
            exit;
        }

echo "Bienvenue {$_SESSION['username']}; vous avez le rôle {$_SESSION['role']}";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    

<h1>
    Bienvenue <?php echo $_SESSION['username']; ?>, vous avez le rôle <?php echo $_SESSION['role']; ?>.
</h1>


<form action="logout.php" method="post">
    <button type="submit">Déconnexion</button>
</form>



</body>
</html>
