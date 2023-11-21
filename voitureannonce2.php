<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Garage auto V. Parrot mécanique carossérie">
    <title>annonce véhicules Garage Parrot</title>
    <link rel="stylesheet" href="voitureoccasion.css">
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <script src="index.js" defer"></script>
</head>
<body>
     <header class="container">
        <div id="logo-menu" logo-menu class="container">
                <img src="images/logo.png">
                <nav class="navbar">
                    <ul>
                       <li class="btn-lg btn btn-danger"><a href="index.php">Services</a>  
                       <li class="btn-lg btn btn-danger"><a href="voitureoccasion.php">Véhicules d'occasion</a></li>
                       <li class="btn-lg btn btn-danger"><a href="rendezvous.php">Rendez-vous</a></li>
                       <li class="btn-lg btn btn-danger"><a href="contact.php">Contact</a></li>
                       <li class="btn-lg btn btn-danger"><a href="compteperso.php">Mon compte</a></li>
                    </ul>
            </nav>
        </div>
     </header>
     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     
     <nav id="textes" class="container">
        <div><marquee >Informations détaillées sur toutes nos voitures d'occasion</marquee></div>
    </nav>
    
     <main id="informations" class="container">
     <h4>Peugeot 308</h4>
         <section id="carrousel" class="container">
            <div class="images-box">
                <img src="images/peugeot1.png" alt="voiture" id="slider_img" > 
            </div>
            <br>
            <button class="btn" id="btn1" onclick="prev()">Precedant </button>
            <button class="btn" id="btn2" onclick="next()">Suivant </button>
         </section>

         <section id="detail" class="container">
         <div>Titre: <em>Ocassion</em></div>
         <div>Marque: <em>Peugeot</em></div>
         <div>Modele : <em>308</em></div>
         <div>Année: <em>2014</em></div>
         <div>Kilometrage:<em>110000</em></div>
         <div>Prix: <em>11500€</em></div>
         <div>Energie: <em>Diésel</em></div>
         <p> Date mise en circulation:<em>01/12/2013</em></div>
         </section>
     </main>
     <aside id="aside" class="container">
     <p id="vehicules"><em><a href="contact.php">Nous-contacter?</a></em>
    </p>
     </aside>
<footer class="container">
    <a href="mentionslegales.html">Mentions légales</a><a href="horaireouverture.php"><marquee behavior="scroll">cliquer ici pour voir nos horaires d'ouverture</marquee></a><a href="#">Copyright</a>
        </footer>
        <script>
        var slider = document.getElementById("slider_img");
        var images = ['peugeot1.png', 'peugeot2.png', 'peugeot3.png'];
        var i = 0 ;

        function prev(){
            if (i <= 0) i = images.length;i--;
            return setimg();
        }
        function next(){
            if ( i >= images.length -1) i =-1;
            i++;
            return setimg();
        }
        function setimg(){
            return slider.setAttribute('src', 'images/' + images[i]);
        }
     </script>
 </body>
</html>    