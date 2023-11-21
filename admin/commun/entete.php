<header>
    <div class="logo">Logo du garage</div>
    <div class="information-user">
        <span>Bonjour <?= $userConnecte['prenom'] . " (".$userConnecte['name'].")" ?></span>
        <span class="btn-deconnexion"><a href="?page=deconnexion"><img src="/<?= $document_root  ?>/admin/images/logout.png" title="Déconnexion" alt="Déconnexion"/></a></span>
    </div>
    <div class="clear"></div>
</header>