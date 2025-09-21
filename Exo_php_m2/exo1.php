
<?php 

$role = "éditeur";

if ($role == "admin") {
echo "Accès complet autorisé"; 

} elseif ($role == "éditeur") {
echo "Accès limité aux modifications"; 
}
elseif ($role == "visiteur") {
echo "Accès lecture seule";
}
else {
echo "Accès lecture seule";
}

?>


<?php 

$role = "éditeur"; 

switch ($role) {
    case "Admin": 
    echo "Accès complet autorisé.";
    break;
case "éditeur":
    echo"Accès limité aux modifications.";
    break;
case "visiteur":
        echo "Accès lecteure seule.";
        break; 
default: 
echo "rôle inconnu.";
}

?>
