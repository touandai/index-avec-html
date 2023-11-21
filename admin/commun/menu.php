<div class="menu">
    
    <a href="?page=tableau-de-bord">Tableau de bord</a>

    <!-- Les annonces : on autorise l'administrateur et les employés à voir les informations -->
    <?php if(in_array($userConnecte['roles_id'], [1, 2])) : ?>
    <a href="?page=liste-annonces">Annonces</a>
    <?php endif; ?>

    <!-- Les horaires d'ouverture : on autorise seul l'administrateur à voir les informations -->
    <?php if(in_array($userConnecte['roles_id'], [1])) : ?>
    <a href="?page=horaire">Horaires</a>
    <?php endif; ?>

    <!-- Les témoignages et avis : on autorise l'administrateur et les employés à voir les informations -->
    <?php if(in_array($userConnecte['roles_id'], [1, 2])) : ?>
    <a href="?page=avis">Témoignages & Avis</a>
    <?php endif; ?>

</div>