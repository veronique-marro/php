
<?php 
function hello() {
    echo "Hello World" . "<br>";
}
hello();


function afficherEtoile($nbr) {
for ($i= 0; $i<$nbr; $i++) {
    echo "*";
}; 
echo "<br>";
}

for ($j= 1; $j<=5; $j++) {
    afficherEtoile($j);
}
?>

<?php 
echo "<br>";

function calculImpots($revenu) { //60000
    $impot = 0;

    if ($revenu > 50000) {
        $impot += ($revenu - 50000) * 0.35; // 3500
        $revenu = 50000;
    }

    if ($revenu > 35000) {
    $impot +=  ($revenu - 35000) * 0.25;
    $revenu = 35000;
}

    if ($revenu > 20000) {
    $impot += ($revenu - 20000) * 0.18;
    $revenu = 20000; 
        
    }

    if ($revenu > 10000) {
        $impot += ($revenu - 10000) * 0.10;
        $revenu = 10000;
    }

    return $impot;
}
echo calculImpots(16000); echo "<br>"; 
echo calculImpots (38000); echo "<br>"; 
echo calculImpots (64000); echo "<br>"; 

?>


<?php 

$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

function calculMoyenne($eleve) {

$Somme = $eleve["maths"] + $eleve["francais"] + $eleve["histoire"]; 
$moyenne = $Somme / 3;  

return round($moyenne , 2); 
}

// echo calculMoyenne($classe[0]);

function estAdmis($nbr) {
    return ($nbr >= 10) ? "Admis" : "Echec";
}

// echo estAdmis(calculMoyenne($classe[0]));

foreach ($classe as $eleve) {
    $moyenne = calculMoyenne($eleve);
    $mention = estAdmis($moyenne);

    echo $eleve["prenom"] . " a obtenu $moyenne donc elle est $mention <br>";
}
?>


<?php

function afficherNombres($debut, $fin, $typeNombres) {
    for ($i = $debut; $i <= $fin; $i++) {
    
        if ($typeNombres == "pair" && $i % 2 == 0) {
            echo $i . " PAIR<br>";
        }

        elseif ($typeNombres == "impair" && $i % 2 != 0) {
            echo $i . " IMPAIR<br>";
        }
    }
}

afficherNombres(7, 99, 'pair');  
echo "<br>";

afficherNombres(59, 169, 'impair'); 

?>

<?php

function afficheTableMultiplication($chiffre) {

    for ($i = 1; $i <= 10; $i++) {

        $resultat = $chiffre * $i;


        echo $chiffre . " x " . $i . " = " . $resultat . "<br>";
    }
}

afficheTableMultiplication(1);

?>

