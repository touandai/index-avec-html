<?php 
/* On supprime la session de l'utilisateur connecté */
unset($_SESSION['user_data']);

/* On rédirige l'utilisateur vers la page de connexion */
header('location:/ECF2023/compteperso.php');