
<?php 
$environnement = "dev";
switch($environnement) {
   case 'dev': ini_set("display_errors", true); break;
   case 'prod' : ini_set("display_errors", false); break;
}
include 'header2.php'; 
include 'connexion.php';

 
if(array_key_exists('valider',$_POST))  {
   //var_dump(date('Y-m-d h:m:s'));die;
   $reqInsert = "INSERT INTO public.temoignages (nom, commentaires, note, date_avis) 
   values (:nom, :message, :note, :date)";
   $tbr = $conn -> prepare($reqInsert);
   $save = $tbr -> execute ([
    ":nom"=>$_POST['nom'],
    ":message"=>$_POST['message'],
    ":note"=> (!empty($_POST['note'])) ? $_POST['note'] : 0,
    ":date"=>date('Y-m-d h:m:s'),
   ]);

   //if($save){
      //header("Location: ?save=1");
      //echo "enregistré";die;

   // }else { 
    //  header("Location: ?save=0");
    //}

}
 ?>
 
      <nav id="apropos" class="container">Pour tout savoir sur notre Garage et nos horaires<a href="apropos.php"> cliquer ici </a></nav>
     
<main class="container">

                    <form id="avis" class="form" method="POST" action=""> 
                    <fieldset>
                             <legend>Laisser-nous votre avis<br>Tous les champs sont obligatoires *
                             </legend>        
                                  <div class="input-row">
                                     <label class="form-label" for="inputname">Nom : *</label>
                                     <input class="form-control form-control-sm" type="texte" name="nom" id="nom" placeholder="Dupont">
                                  </div>
                                  <br/>
                                  <div class="input-row">
                                     <label class="form-label" for="note">Notes : *</label>
                                     <input type="number" name="note" id="note" min="0" max="10">
                                  </div>
                                  <div class="input-row">
                                     <label class="form-label" for="inputmessage">Commentaire:  </label>
                                     <textarea class="form-control" name="message" id="message"placeholder=" Donner votre avis..."></textarea>
                                  </div>
                                  <br>
                                  <!--<div class="input-row">
                                     <label class="form-label" for="note">Dates : *</label>
                                     <input type="date" name="date" id="date" min="0" max="10">
                                  </div>-->
                                     <button class="btn btn-primary" type="submit" name="valider" id="button">Laisser votre avis</button>
                                  <br><p style = color:red; id="erreur">
                    </fieldset>
                    </form>
             
</main>
<!--footer-->
<?php include 'footer.php'; ?>
 
<script>
 
document.getElementById('avis').addEventListener("submit",function(e){
         let nom = document.getElementById('nom');
         let note = document.getElementById('note');
         let date = document.getElementById('date');
         let erreur;

         if(!nom.value){
            erreur = "Veuillez indiquer votre nom";
         } else {
            erreur = "";
         }

         if(!note.value){
            erreur = "Veuillez attribuer une note";
         } else {
            erreur = "";
         }     

         /*if(!date.value){
        erreur = "Veuillez indiquer la date";
         } */      

        if(0 !== erreur.length){
            console.log("Erreur détectée");
            return false;
            /*e.preventDefault();
            document.getElementById('erreur').innerHTML=erreur;
            return false;*/
        }else{
            //alert("envoyé!");
          
           
            alert ("votre avis est bien enregistrée merci et à bientôt  !");
         }

});
</script>