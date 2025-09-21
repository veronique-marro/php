<?php 
$chaine = "12,5,abc,32,-7,42";

$nombres = explode(",", $chaine); 

$valeurs_numeriques = [];

foreach ($nombres as $element) {
    if (is_numeric($element)) {
        $valeurs_numeriques[] = intval($element); 
    }
}

echo "<pre>";
var_dump ($valeurs_numeriques);
echo "</pre>";

echo  min($valeurs_numeriques); 
echo "<br>";
echo  max($valeurs_numeriques); 
echo "<br>";

?>


<?php 

$form = [
"nom" => "   ",
"age" => "26",
"email" => ""
];

if(isset($form["nom"]) && !empty(trim($form["nom"]))) {
    echo "Le champ nom est valide";
} else {
    echo " Le champ nom est invalide ";
}

if(isset($form["age"]) && !empty(trim($form["age"])) && is_numeric($form["age"]) && is_numeric($form["age"]) > 0)  {
    echo "Le champ age est valide";
} else {
    echo " Le champ age est invalide ";
}

if(isset($form["email"]) && !empty(trim($form["email"]))) {
    echo "Le champ email est valide";
} else {
    echo " Le champ email est invalide ";
}

?>


<?php 

$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, 
Table:42.99, chaise:14.9";

$articles = explode(",", $panier); 


echo "<pre>";
var_dump($articles);
echo "</pre>";

$A = [];

foreach ($articles as $article) {

$A[] = explode(":", $article);

}

echo "<pre>";
var_dump($A);
echo "</pre>";

$articles_valides = [];

foreach ($A as $article) {

    $nom = trim(strtolower($article[0]));
    $prix = $article[1];

    if (is_numeric($prix)) {
        
        $articles_valides[$nom] = $prix; 

        echo "Produit : $nom, Prix : $prix<br>";
    } else {

        echo "Erreur : Prix invalide pour le produit '$nom'.<br>";
    }

$total_articles = count($articles_valides);
$prix_total = array_sum($articles_valides);
$prix_total_arrondi = round($prix_total, 2); 
echo "Prix total du panier (arrondi) : $prix_total_arrondi €<br>";


}

echo "<pre>";
var_dump($articles_valides);
echo "</pre>";



?>