<?php include 'header2.php'; 
include 'connexion.php';

    if (isset($_POST['Envoyer'])){

       if(isset($_POST['name']) AND !empty($_POST['password'])){
      
      $reqInsert = "INSERT INTO public.users (nom, mot_de_pass) 
        values (:nom, :password)";
        $tbr = $conn -> prepare($reqInsert);
        $save = $tbr -> execute ([
         ":nom"=>$_POST['nom'],
         ":message"=>$_POST['mot_de_pass'],
        ]);

         }else {
               echo "Veuillez remplir tous les champs !";             
    }

    if($save){
        header("Location: ?save=1");
  
      //  echo "enregistré";die;
      }else { 
        header("Location: ?save=0");
      }
}
?>
     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     
     <main class="container">
            <form id="inscription" class="form" method="POST" action="">  
                <fieldset>
                    <legend>Créer un compte client?<br>Inscription</legend> 
                    <div class="input-row">
                     <label class="form-label" for="inputname">Email/Nom : *</label>
                     <input class="form-control form-control-sm" type="texte" name="nom" id="nom" placeholder="Dupont">
                    </div>
                    <div class="input-row">
                     <label class="form-label" for="inputpassword">Password: *</label>
                     <input  class="form-control form-control-sm" type="password" name="password" id="password" placeholder="mot de pass">
                    </div>
                     <br>
                     <button class="btn btn-primary" name="envoyer" type="submit" id="envoyer">Envoyer</button>
                     <a href="compteperso.php">Accéder à la page de connexion</a> <p style = color:red; id="erreur"> 
                </fieldset>
            </form> 
             
     </main>
     <script> 

        document.getElementById('inscription').addEventListener("submit",function (e) 
        {

                 let email = document.getElementById('nom');
                 let password = document.getElementById('password');
                 let erreur;

                 if(!password.value){
                 erreur = "Veuillez remplir le champ password";
                 }else{
                    erreur="";
                 }


                 if(!nom.value){
                erreur = "Veuillez remplir le champ nom";
                 }
                 else  {
                    erreur="";
                 }             

                if(0 !== erreur.length){
                e.preventDefault();
                    //document.getElementById('erreur').innerHTML=erreur;
                    //return false;
                }else{
                    //alert("envoyé!");
                    console.log("Tout est bon");
                    //alert ("Votre demande est envoyé !");
                }

    });
     </script>

        <?php include 'footer.php'; ?> 
       
