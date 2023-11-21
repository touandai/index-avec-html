<?php include 'header2.php'; ?>

<?php 

$to ="romaric.nganas@outlook.fr";
$nom = "";
$prenom= "";
$email = "";
$tel = "";
$message= "Bonjour";

$headers = "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "From: romaric.nganas@outlook.fr\r\n";

if (mail($to, $subject,  $headers))
     echo "votre message est bien envoyé";
     else 
     echo "erreur envoi";

?>