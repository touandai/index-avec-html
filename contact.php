<?php 
include 'header2.php';

//$environnement = "dev";
//switch($environnement) {
   //case 'dev': ini_set("display_errors", true); break;
   //case 'prod' : ini_set("display_errors", false); break;
//}

$to ="vincentpp@gmail.com";
$subject="";
$nom = "";
$prenom= "";
$email = "";
$tel = "";
$message= "Bonjour";

$headers = "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "From: romaric.nganas@outlook.fr\r\n";

//if (mail($to, $subject,  $headers))
 //    echo "votre message est bien envoyé";
 //    else 
    // echo "erreur envoi";
?>

     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.html"> cliquer ici </a></nav>
     
     <main class="container">
            <form id="contact" class="form" method="POST" action="" name="contact">  
                <fieldset>
                    <legend>Pour toutes vos remarques,utiliser ce formulaire pour nous contacter.
                    </legend>        
                    <div class="input-row">
                     <label class="form-label" for="inputname">Nom : *</label>
                     <input class="form-control form-control-sm" type="texte" name="Name" id="inputname" placeholder="Dupont" required/>
                    </div>
                    <div class="input-row">
                     <label class="form-label" for="inputusername">Prenom : *</label>
                     <input class="form-control form-control-sm" type="texte" name="username" id="inputname" placeholder="Patrick" required/>
                    </div>
                    <div class="input-row">
                     <label class="form-label" for="inputemail">E-mail: *</label>
                     <input  class="form-control form-control-sm" type="email" name="email" id="email" placeholder="monadresse@....." required/>
                    </div>
                    <div class="input-row">
                     <label class="form-label" for="phone">Telephone : *</label>
                     <input class="form-control form-control-sm" type="texte" name="phone" id="phone" placeholder="06..." required/>
                    </div>
                    <div class="input-row">
                     <label class="form-label" for="inputmessage">Message: * </label>
                     <textarea class="form-control" name="message" id="inputmessage"placeholder=" Ecrivez ici votre message..." required></textarea>
                     </div>
                     <br>
                     <button class="btn btn-primary" name="envoyer" type="submit" id="button" onclick="validation_avant_envoi">Envoyer</button>
                 
                </fieldset>
            </form> 
          </section>   
     </main>
     <aside class="container" > <p id="vehicules">M'identifier ou créer,<em><a id="rdv" href="compteperso.php">mon espace personnel?</a></em>
             </p>
     </aside>
     <!--footer-->
     <?php include 'footer.php'; ?>  
