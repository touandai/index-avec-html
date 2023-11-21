<?php
$titre = "Connectez-vous à votre espace";

if(isset($_SESSION['user_data'])) {
  header('location: ?page=tableau-de-bord');
}

require 'commun/header.php';
?>
<h1>Espace d'administration</h1>
<div class="page-connexion">
  <h3>Connectez-vous</h3>
  <form method="post">
    <div class="form-field">
      <input type="text" name="email" placeholder="Email *"/>
    </div>
    <div class="form-field">
      <input type="password" name="mot_de_passe" placeholder="Mot de passe *"/>
    </div>
    <div class="btn">
      <input type="submit" name="connexion" value="Connexion"/>
    </div>
  </form>
  <?php if(isset($_GET['erreur'])): ?>
  <div class="erreur-connexion">La combinaison login/mot de passe n'est pas correcte. Réessayez ou contactez l'administrateur !</div>
  <?php endif; ?>
</div>
<?php
require 'commun/footer.php';
