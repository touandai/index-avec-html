<?php
$titre = "Témoignages et Avis";

/**
 * Récupération des informations de l'utilisateur connecté
 */
$userConnecte = $tableUtilisateur[$_SESSION['userID']];

require 'commun/header.php';

require 'commun/entete.php';

require 'commun/menu.php';
?>

<h1>Témoignages et Avis</h1>

<?php

require 'commun/footer.php';