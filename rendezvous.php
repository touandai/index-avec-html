<!--header-2-->

<?php 
include 'header2.php'; 
include 'connexion.php'; 


  

//verif formulaire **
  if(array_key_exists('valider',$_POST))  {
      //echo "test";die; 

      
      $reqInsert = "INSERT INTO public.rendez_vous (civilite,immatriculation, nom, prenom, email, telephone, prestation, date_rdv, message) 
      values (:civilite, :immatriculation, :nom, :prenom, :email, :telephone, :prestation, :date_rdv, :message)";
      $tbr = $conn -> prepare($reqInsert);
      $save = $tbr -> execute ([
    ":civilite"=>$_POST['civilite'],
    ":immatriculation"=>$_POST['immatriculation'],
    ":nom"=>$_POST['nom'],
    ":prenom"=>$_POST['prenom'],
    ":email"=>$_POST['email'],
    ":telephone"=>$_POST['telephone'],
    ":prestation"=>$_POST['prestation'],
    ":date_rdv"=>$_POST['date_rdv'],
    ":message"=>$_POST['message'],
    ]);
    if($save){
      header("Location: ?save=1");

    //  echo "enregistré";die;
    }else { 
      header("Location: ?save=0");
    }



}

$req = "select * from public.roles";
$tbr = $conn -> query($req);
$result = $tbr ->fetchAll();
//controle affichage des roles//

?>
     <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     
     <main class="container">
     <?php 
     if(isset($_GET['save'])){

      switch($_GET['save']){
       case 1 : 
        echo "<div>Votre demande a bien été enregistrée. Merci! </div>";
        break;
       case 0 : 
        echo "<div> Suite à un probleme technique votre demande n'a pas été enregistrée , veuillez recommencer ! </div>";
        break;
       
      }
     }
     
     ?>


           <form class="form" method="POST" action="">
                <fieldset>
                    <legend>Les champs précédés d'astérix sont obligatoires.
                    </legend>
                        <div class="input-row">
                        <label for="civilite">Civilité :* </label>
			            <select class="form-control form-control-sm" name="civilite" id="civilite" required>
				              <option value="Monsieur">Monsieur</option>
				              <option value="Madame">Madame</option>
                        </select>
                        </div>
                        <div class="input-row">
                        <label for="immatriculation">Renseigner votre plaque d'immatriculation : </label>
                        <input class="form-control form-control-sm" type="text" name="immatriculation" id="immatriculation">
                        </div>
                        <div class="input-row">
                        <label for="name" >Nom :* </label>
                        <input class="form-control form-control-sm" type="text" name="nom" id="name" required="required">
                        </div>
                        <div class="input-row">
                        <label for="username" >Prenom : </label>
                        <input class="form-control form-control-sm" type="text" name="prenom" id="usernname"  required="required">
                        </div>
                        <div class="input-row">
                        <label for="phone" >Telephone :* </label>
                        <input class="form-control form-control-sm" type="text" name="telephone" id="telephone" required="required">
                        </div>
                        <div class="input-row">
                        <label for="email" >E-mail :* </label>
                        <input class="form-control form-control-sm" type="text" name="email" id="email" required="required">
                        </div>
                        <div class="input-row">
                        <label for="date">Choisir le type de Prestation :* </label>
                        <select class="form-control form-control-sm" name="prestation" id="prestation" required="required">
                            <option value="0">--Veuillez choisir une prestation</option>
                            <option value="1" name="mécanique" >Réparation Mécanique</option>
                            <option value="2" name="carrosserie">Réparation Carrosserie</option>
                            <option value="3" name="occasionvehicule" >Visite voiture d'occasion</option>
                        </select>
                        </div>
                        <div class="input-row">
                        <label for="date" >Choisir une date :* </label>
                        <input type="date" id="start" name="date_rdv" value="2023-11-22" min="2023-11-22" max="2023-12-22" />
                        </div>   

                        <div class="input-row">
                        <label for="message">Message :* </label>
                        <textarea class="form-control form-control-sm" name="message" id="message">Ecrivez votre message ici</textarea>
                        </div>
                        <button class="btn btn-primary" type="submit" value="avis" name="valider" id="submit">Valider</button>
                        <br>
                </fieldset>
              
         </form>
     </main>
     <aside class="container" > <p id="vehicules">M'identifier ou créer,<em><a id="rdv" href="compteperso.php">mon espace personnel?</a></em>
             </p>
     </aside>
<!--

<p style = color:red; id="erreur">

     <script>
     let erreur;
     let inputVal = document.querySelector('input');

     for(var i= 0; i < inputVal.length; i++){
      if(!inputVal[i].value){
        erreur= "Veuillez saisir tous les champs obligatoires";
      }
      
     }
     </script>
    -->
     <!--footer-->
     <?php include 'footer.php'; ?>
     
    
   
  