<?php
$titre = "Tableau de bord";

/**
 * Récupération des informations de l'utilisateur connecté
 */
$userConnecte = $_SESSION['user_data'];

require 'commun/header.php';

require 'commun/entete.php';

require 'commun/menu.php';
?>

<h1>Tableau de bord</h1>

<?php

require 'commun/footer.php';