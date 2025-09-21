<?php $villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", 
                "Lyon", "Paris", "Lens","Montpellier", "Dieppe"]; 
                $villes[]= "Reims";
                $villes[0]= "Nice";
            echo $villes[4]; 
            echo count($villes); 
            foreach ($villes as $villes) {
            echo $villes ."<br>";
            }

                ?>

<?php

$eleves = [
    "Alice"  => 7,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11
];

$bonEleve = 0; 

foreach ($eleves as $cle => $valeur) {
    echo "$cle a obtenu $valeur <br> ";
if ($valeur >= 10) {
    $bonEleve++; 
}
}
echo "le nombre d'élèves ayant obtenu la moyenne est de $bonEleve <br> "; 

?>



<?php 

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

echo $produits[1]["stock"]."<br>";
$produits[]=["nom"=>"Veste", "prix" => 40, "stock" => 25];
echo $produits[3]["nom"]."<br>";
?>




<?php 

$total= 0;
$Jours = 0; 

$temperatures = [30, 32, 34, 30, 35, 34, 31];
echo array_sum($temperatures)."<br>";
echo count($temperatures)."<br>"; 
echo array_sum($temperatures) / count($temperatures); 

foreach ($temperatures as $temperature) {
$total += $temperature;
$Jours++;
}

$moyenne = $total / $Jours;

echo " La moyenne des temperatures des 7 derniers jours est de " . $moyenne;
?>

<?php

$commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];

$tva = 0.20;
$ca_HT = 0;
$ca_TTC = 0; 
$non_regle_ht = 0;

foreach ($commandes as $commande) {
    $client = $commande["client"];
    $montant_ht = $commande["montant_ht"];
    $montant_ttc = $montant_ht * (1 + $tva);
    $statut = $commande["statut"]; 

    echo "Commande de $client : $montant_ht € HT, $montant_ttc € TTC – $statut<br>";

        $ca_HT += $montant_ht;
        $ca_TTC += $montant_ttc;


        if ($statut === "en attente") {
        $non_regle_ht += $montant_ht;

        $pourcentage_non_regle = ($non_regle_ht / $ca_HT) * 100;
}

}

echo "$non_regle_ht €"; 
echo "<br>Chiffre d’affaires total HT : $ca_HT €<br>";
echo "Chiffre d’affaires total TTC : $ca_TTC €<br>";
echo "$pourcentage_non_regle %"; 

?>


<?php 


$etudiants = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

foreach ($etudiants as $nom => $notes) {
    $moyenne = $somme = array_sum($notes) /  $Matiere = count($notes);
    
    

    if ($moyenne < 10) {
        $appreciation = "Échec";
    } elseif ($moyenne < 12) {
        $appreciation = "Peut mieux faire";
    } elseif ($moyenne <= 15) {
        $appreciation = "Bon travail";
    } elseif ($moyenne > 15) {
        $appreciation = "Excellent";
    }

echo ". <br> $nom a la moyenne de " . round($moyenne, 1) . " et une appreciation : $appreciation"; 

}

$Matieres= [
        "maths" => 0,
        "français" => 0, 
        "anglais" => 0,
];

foreach ($etudiants as $nom => $notes) {

}

$matieres = [
    "maths" => 0,
    "francais" => 0, 
    "anglais" => 0,
];

$nbEtudiants = count($etudiants);


foreach ($etudiants as $nom => $notes) {
    foreach ($notes as $matiere => $note) {
    $totalNotes= $matieres[$matiere] += $note;
    }
}


foreach ($matieres as $matiere => $totalNotes) {
    $moyenne = $totalNotes / $nbEtudiants;

echo ". <br>" .round($moyenne,1); 

}



?>

