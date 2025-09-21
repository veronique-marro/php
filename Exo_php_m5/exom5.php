<?php 
$i = 1;
while ($i <= 20) {
    echo $i ."/";
    $i++; 
}
?>



<?php 
$i = 20;
do {
echo $i ." "; 
$i--;
} while ($i >= 1); 

?>


<?php
for ($i = 1; $i <= 10; $i++) {
echo "7 x $i = " . (7 * $i) . "<br>";
}

?>


<?php 

$somme = 0;

for ($i = 1; $i <= 100; $i++) {
$somme += $i;
}
echo $somme . "<br>"; 
?>


<?php 
for ($ligne = 1; $ligne <= 5; $ligne++) {
for ($colonne = 0; $colonne < $ligne ; $colonne++) {
    echo "*";
}
echo "<br>";
}




