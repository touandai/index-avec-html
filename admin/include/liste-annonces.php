<?php
$titre = "Liste des annonces";

/**
 * Récupération des informations de l'utilisateur connecté
 */
$userConnecte = $tableUtilisateur[$_SESSION['userID']];

require 'commun/header.php';

require 'commun/entete.php';

require 'commun/menu.php';
?>

<h1>Liste des annonces</h1>

<?php

require 'commun/footer.php';