<?php 

$color = $_POST['color']; 
$color = trim($_POST['color'] ?? '');
$color = htmlspecialchars($color, ENT_QUOTES);


if ($color == 'Rouge'){
echo "<font color = 'red'> <h1> Vous avez choisi la couleur $color ! <h1></font>"; 
}

if ($color == 'Green') {
    echo "<font color = 'green'> <h1> Vous avez choisi la couleur $color ! <h1></font>"; 
}

if ($color =='Bleu') {
echo "<font color = 'Blue'> <h1> Vous avez choisi la couleur $color ! <h1></font>"; 
}



?>