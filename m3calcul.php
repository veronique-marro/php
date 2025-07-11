<?php 
$a = 5;
$b = 10;

echo "La somme de a et b est de " . $a + $b;


echo " La différence de a et b est de " .$a - $b; 

echo " le produit de a et b est de " .$a * $b; 

echo " Le quotient de a et b est de " .$a / $b; 

echo " le reste de a et b est de " .$a % $b; 

?>


<?php 
$a = 5; 
$b = 10;

echo "$a==$b donne" .($a==$b ? "true" : " false ") . "<br>";


?> 



<?php 

$x = true;
$y = false;

echo "x and y donne " .(($x and $y) ? "true" : "false") . "<br>";
echo "x ou y donne " .(($x or $y) ? "true" : "false") . "<br>"; 
echo "x xor y donne " .(($x xor $y) ? "true" : "false") . "<br>";
echo "x not y donne " .((! $x ) ? "true" : "false") .  "<br>";
echo "x and y donne " .(($x && $b ) ? "true" : "false") . "<br>"; 
echo "x or y donne " .(($x || $b ) ? "true" : "false") 
?>



<?php 

$a = 5; 
$b = 10;
$c = 3;

$a += $b; 
echo  $a . "<br>"; // 15

$b *= $c; 
echo $b . "<br>"; // 30

$b /= $a; 
echo  $b . "<br>"; // 2

$b -= $c; 
echo  $b . "<br>"; // -1

$b %= $c; 
echo  $b . "<br>"; // -1

?>