<?php 

include 'connexion.php';
include 'header.php';
 ?>
<!--header-->
<!--bandeau nav-->

     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     
     <main id="content" class="container">  
                 <article id="article1" class="container">
                    <a href="repmecanique.php"><img src="images/mecanique.png"></a>
                    <p>Découvrez toutes nos <em>expertises en entretien mécanique</em>
                    <ul>
                        <li>Révision voiture</li>
                        <li>Vidange-Climatisation-Pneus</li>
                        <li>Freinage-Amortisseurs-Courroies</li> 
                    </ul>
                    Consulter notre page <em>Entretien mécanique</em> pour 
                    <a href="repmecanique.php">en savoir plus</a>
                    </p>
                </article>
                <article id="article2" class="container">
                    <a href="repcarrosserie.php"><img src="images/img-carrosserie.png"></a>
                    <p><em>Elle fait appel à différentes techniques (remplacement, débosselage, 
                    redressage, 
                    peinture, mastic, etc.)pour réparer les trous, rayures ou bosses sur 
                    votre carrosserie.</em>
                    <ul>
                        <li>Le remplacement de la pièce</li>
                        <li>Le redressage - Le débosselage </li>
                    </ul>
                    Consulter notre page <em>Réparation carrosserie</em> pour
                    <a href="repcarrosserie.php">Tout savoir sur la carrosserie</a> 
                    </p>
                </article>
     </main>
     <aside id="section2" class="container">
            <article id="occaz" class="container">
                <a href="voitureoccasion.php"><p><em>Notre expertise à votre service.<br>
                   decouvrez nos voitures d'occasion ...
                   </p></a></em>
            </article>
            <article class="container">
                 <h5>Temoignages et avis clients</h5>

                <?php 

                    $req = "SELECT * FROM public.temoignages WHERE statut = 0 ORDER BY date_avis ASC LIMIT 3";
                    $tdr = $conn -> query($req);
                    $resultat = $tdr -> fetchAll();

                    foreach($resultat as $key => $value) {
                ?>
                <div class="temoignage1">
                    <p>Commentaire posté par : <?php echo $value['nom']; ?> avec une note de : <b><?php echo $value['note']; ?></b></p>
                    <p><?php echo (empty($value['commentaires'])) ? "<em>Aucun message</em>" : $value['commentaires']; ?></p>
                </div>
                <?php
                    }
                 
                ?>
                <!--
                 <div class="temoignage1">
                 <p>Le garage est toujours à l'écoute afin de solutionner au mieux 
                     les interventions sur nos véhicules. Belle réactivité !
                 </p>
                 </div>
                 <div class="temoignage2">
                 <p>Ce petit garage est très serviable. Le patron donne de très 
                     bons conseils. Je recommande.
                 </p>
                 </div>
            
                 <div class="temoignage3">
                 <p>Super, tout nickel 👌 Service impeccable et rapide Aucun doute 
                 sur la compétence et la réalité des travaux préconisés et réalisés
                 </p>
                
                 </div> --> 
                 <a href="avis.php">Je donne mon avis</a>
            </article>
        </aside>  
        <!--footer-->
        <?php include 'footer.php'; ?>