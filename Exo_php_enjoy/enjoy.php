<?php 

$loisirs = $_POST['loisirs'] ?? [];

if(count($loisirs) >= 2) {
    foreach ($loisirs as $loisir){
        echo "<ul><li>$loisir</li></ul>";
    }
} else {
echo "2 choix au minimum !"; 
}

?>