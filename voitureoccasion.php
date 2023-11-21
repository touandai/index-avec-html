<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Garage auto V. Parrot mécanique carossérie">
    <title>Garage V. Parrot entretien mécanique, carosserie et vente voiture d'occasion </title>
    <link rel="stylesheet" href="voitureoccasion.css">
    <link href="assets/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     <header class="container">
        <div id="logo-menu" logo-menu class="container">
                <img src="images/logo.png">
                <nav class="navbar">
                    <ul>
                       <li class="btn-lg btn btn-danger"><a href="index.html">Services</a>  
                       <li class="btn-lg btn btn-danger"><a href="voitureoccasion.html">Véhicules d'occasion</a></li>
                       <li class="btn-lg btn btn-danger"><a href="rendezvous.php">Rendez-vous</a></li>
                       <li class="btn-lg btn btn-danger"><a href="contact.php">Contact</a></li>
                       <li class="btn-lg btn btn-danger"><a href="compteperso.php">Mon compte</a></li>
                    </ul>
            </nav>
        </div>
     </header>
     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     <nav id="occase" class="container">
        <p>Un coup d'oeil sur nos voitures d'occasion</p>
        <img src="images/diaspo2.png">
     </nav>
     <nav id="section-recherche" class="container"> 
            <div id="kilometrage">
                 <label class="form-label" for="kilometrage">Kilométrage : </label>
                 <input type="range" name="kilometrage" id="kilometrage" min="0" max="250000">
                 <br>
                 <button class="btn form-label" id="kilometrage">..</button>
                 <button class="btn form-label btn-secondary" id="kilometrage" type="reset">Réinitialisé</button>
            </div>
            <div id="prix">
                 <label class="form-label" for="prix">Prix : </label>
                 <input type="range" name="prix" id="prix" min="0" max="20000">
                 <br>
                 <button class="btn form-label" id="prix">..</button>
                 <button class="btn form-label btn-secondary" id="prix" type="reset">Réinitialisé</button>
            </div>
            <div id="annees">
                 <label class="form-label" for="annees">Années : *</label>
                 <input type="range" name="annees" id="annees" min="1998" max="2020">
                 <br>
                 <button class="btn form-label" id="annees">..</button>
                 <button class="btn form-label btn-secondary" id="annees" type="reset">Réinitialisé</button>
            </div>   
     </nav>
     
     <main id="occasion" class="container">
     <section class="container">
         <div class="img"><a href="voitureannonce4.php"><img src="images/clio.png" alt="Clio" ></a></div>
         Renault Clio
         <ul>
         <li id="annee">Année : 2016 </li>
         <li id="kilometre"> Kilométrage : 95000 </li>
         <hr>
         <li id="prix">Prix : 10000€</li>
         <button class="btn btn-dark" ><a class="detail" href="voitureannonce4.php">Détail</a></button>
         </ul>
     </section>
     <section class="container">
         <div class="img"><a href="voitureannonce2.php"><img src="images/308-1.png" alt="Peugeot"></a></div>
         Peugeot 308
         <ul>
         <li id="annee">Année : 2014 </li>
         <li id="kilometre">Kilométrage : 110000</li>
         <hr>
         <li id="prix">Prix : 11500€ </li>
         <button class="btn btn-dark" ><a class="detail" href="voitureannonce2.php">Détail</a></button>
         </ul>
     </section>
     <section class="container">
         <div class="img" ><a href="voitureannonce3.php"><img src="images/evo.png" alt="Fiat"></a></div>
         Fiat Evo
         <ul>
         <li id="annee">Année : 2012 </li>
         <li id="kilometre">Kilométrage : 170000 </li>
         <hr>
         <li id="prix">Prix : 7500€ </li>
         <button class="btn btn-dark" ><a class="detail" href="voitureannonce3.php">Détail</a></button>
         </ul>
     </section>   
     <section class="container">
         <div class="img" ><a href="voitureannonce1.php"><img src="images/polo.png"alt="Volswagen"></a></div>
         Volswagen Polo
         <ul>
         <li id="annee">Année : 2009 </li>
         <li id="kilometre">Kilométrage : 130000</li>
         <hr>
         <li id="prix">Prix : 6500€ </li>
         <button class="btn btn-dark" ><a class="detail" href="voitureannonce1.php">Détail</a></button>
         </ul> 
     </section>  
     </main>
     <aside id="aside" class="container"> 
     <p id="vehicules"><em>En savoir plus?<a href="contact.php">Contactez-nous,</a><em></em>
        Acceder à mon <a id="rdv" href="compteperso.php">Espace perso...</a></em>
    </p>
     </aside>

         <!--footer-->
         <?php include 'footer.php'; ?>
