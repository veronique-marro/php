<?php 

$jour = "Mercredi";

switch ($jour) {
    case "Lundi":
        echo "Lundi est un jour ouvré.";
        break;
        case "Mardi": 
        echo "Mardi est un jour ouvré.";
        break;
        case "Mercredi":
        echo "Mercredi est un jour ouvré.";
        break;
        case "Jeudi":
        echo "Jeudi est un jour ouvré.";
        break;
        case "Vendredi": 
        echo "Vendredi est un jour ouvré";
        break;
        case "Samedi": 
        echo "Samedi c'est le week-end";
        break;
        case "Dimanche": 
        echo "Dimanche c'est le week-end";
        break;
        default: 
        echo "Jour non reconnu";

}

?>