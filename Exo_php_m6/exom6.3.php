<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3.3</title>
</head>
<body>

<?php 

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];

echo "Le stock de casquette est de " . $produits[1]['stock'] . "<br>";
$produits[]=["nom"=>"Veste", "prix" => 40, "stock" => 25];
echo $produits[3]["nom"]."<br>";

?>

<table>

<tr>
<th>Produit</th>
<th>Prix</th>
<th>Stock</th>
<th>CA potentiel</th>
</tr>

<?php 

foreach($produits as $produit) {
    echo "<tr>";
    echo "<td>" . $produit["nom"] . "</td>";
    echo "<td>" . $produit["prix"] . "</td>";
    echo "<td>" . $produit["stock"] . "</td>";
    echo "<td>" . $produit["prix"] * $produit["stock"] . "</td>";
    echo "</tr>"; 
}

?>

</table>

</body>
</html>
