<?php 
$temperature = 15;
$message = $temperature < 10 ? ($temperature < 5 ? ($temperature < 0 ? "Glacé":"Très froid") : "froid") : ($temperature > 20 ? "Chaud":"doux");

echo $message;

?>



