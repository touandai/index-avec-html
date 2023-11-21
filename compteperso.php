<?php 

session_start();

include 'header2.php'; 
include 'connexion.php'; 

//romaric.nganas@gmail.com
//Romaric10

if(array_key_exists('connexion',$_POST)){
  
    if (isset($_POST['email']) && isset($_POST['mot_de_pass'])){
      

        $reqInsert = "SELECT u.*, r.name FROM  public.users u LEFT JOIN public.roles r ON r.id = u.roles_id WHERE email = :email AND mot_de_pass = :password";

        
       $tbr = $conn -> prepare($reqInsert);
       $tbr -> execute ([
         ":email"    =>$_POST['email'],
         ":password" =>$_POST['mot_de_pass'],
       ]);
       $user = $tbr ->fetch();
       if(!empty($user)){
            $_SESSION['user_data'] = $user;
            //header("location:?connexion=success");
            header("location:admin/index.php");
        }  else{
            header("location:?erreur=1");
        }

    }
    echo "les 2 champs sont obligatoires";
   
}

?>



<!--header-->
     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     <div>
        <?php 
            if(isset($_SESSION['user_data'])) {
                echo "Bonjour " . $_SESSION['user_data']['nom'] . ", vous êtes bien connecté.";
            }
        
        ?> 
    </div>
     <main id="connecter" class="container">
            <form id="connecte" class="form" method="POST" action="">  
                <fieldset>
                    <legend>Identifiez-vous, pour profiter de nos differents services.</legend> 
                    <div class="input-row">
                     <label class="form-label" for="inputname">Nom / Email : *</label>
                     <input class="form-control form-control-sm" type="email" name="email" id="email" placeholder="Dupont" required>
                    </div>
                    <div class="input-row">
                     <label class="form-label" for="password">Password: *</label>
                     <input  class="form-control form-control-sm" type="password" name="mot_de_pass" id="password" placeholder="mot de pass" required>
                    </div>
                     <br>
                     <button class="btn btn-primary" name="connexion" type="submit" id="connect">Connexion</button>
                     Nouveau client? <a href="inscription.php">inscrivez-vous d'abord</a>
                     <p style = color:red; id="erreur">
                </fieldset>
            </form> 
              
     </main>

     <script> 
      document.getElementById('connecte').addEventListener("submit",function (e) 
         {
         
         let email = document.getElementById('email');
         let password = document.getElementById('password');
         let erreur;

         if(!password.value){
         erreur = "Veuillez remplir le champ mot de pass";
         }

         if(!nom.value){
        erreur = "Veuillez remplir le champ nom";
         }
                  

        if(0 !== erreur.length){
       
            //document.getElementById('erreur').innerHTML=erreur;
            //return false;
        }else{
            //alert("envoyé!");
            //alert ("Votre demande est envoyé !");
        }

});
</script>
     <!--footer-->
     <?php include 'footer.php'; ?> 
          
     