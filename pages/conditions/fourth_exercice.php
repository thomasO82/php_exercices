<?php
echo "Entrez un chiffre pour le jour de la semaine (1 pour lundi, 2 pour mardi, etc.) : ";
?>
<br>
<?php
$day = 2;
switch ($day) {
    case 1:
        echo "Le jour suivant est lundi.";
        break;
    case 2:
        echo "Le jour suivant est mardi.";
        break;
    case 3:
        echo "Le jour suivant est mercredi.";
        break;
    case 4:
        echo "Le jour suivant est jeudi.";
        break;
    case 5:
        echo "Le jour suivant est vendredi.";
        break;
    case 6:
        echo "Le jour suivant est samedi.";
        break;
    case 7:
        echo "Le jour suivant est dimanche.";
        break;
    default:
        echo "Entrée invalide. Veuillez entrer un chiffre entre 1 et 7.";
}
?>