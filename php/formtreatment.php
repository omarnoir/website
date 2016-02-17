<?php 
$name=htmlspecialchars($_POST['name']); 
$email=htmlspecialchars($_POST['email']); 
$subject=$_POST['subject']; 
$message=$_POST['message'];  

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 
//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=utf-8\r\n"; 
////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= 'FROM:' . htmlspecialchars($email);

//$subject .= 'de : ' . htmlspecialchars($_POST['name']) .' mail : ' . htmlspecialchars($_POST['email']);
  $message .= "\n\nEmetteur du message : "  . $name . 
                "\nMail de l'émetteur : " . $email .
                "\nSujet du mail : " . $subject;

$destinataire="omardiabira@gmail.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail


if (mail($destinataire,$subject,$message,$headers)) { 
    echo "Votre mail a été envoyé<br>";
} 
else { 
echo "Une erreur s'est produite"; 
    
} 
?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="http://www.votre-site.com">ici 
</a></p>
