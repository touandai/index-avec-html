<?php
/* On démarre la session */
session_start();

/* Racine du projet */
$document_root = "ECF2023";

$page = (isset($_GET['page'])) ? $_GET['page'] : "login";

/* Si l'utilisateur n'est pas connecté.e */
if(!isset($_SESSION['user_data'])) {
  header('location:/' . $document_root . '/compteperso.php');
} 

switch($page) {
  /* Tableau de bord */
  case 'tableau-de-bord':
  default:   
    require 'include/tableau-de-bord.php';
    break;
  /* Déconnexion */
  case 'deconnexion';
    require 'include/deconnexion.php';
    break;
  /* Liste des annonces */
  case 'liste-annonces':
    require 'include/liste-annonces.php';
    break;
  /* Avis et témoignages */
  case 'avis':
    require 'include/avis.php';
    break;
}
