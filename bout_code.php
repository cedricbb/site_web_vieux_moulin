<?php

                    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']))
                        {
                        	$to      = 'cedric.billard@ymail.com';
                        	$sujet   = '';
     						$message = $_POST['message'];
     						$from    = $_POST['email'];
     						$reply   = $_POST['email'];
							$headers = "From: ". $from ."\n";
							$headers = "Reply-To: " . $reply ."\n";
							$headers = "MIME-Version: 1.0 \n";
							$headers = "Content-type: text/plain; charset=utf-8 \n";
							$headers = "X-Mailer: PHP/" . phpversion() . "\n";

						     mail($to, $sujet, $message, $headers);
                        ?>

                        <h3>Merci de nous avoir contacté, nous vous répondront dans les plus brefs délais.</h3>

                        <?php
                        }   
                        else
                        {

                        ?>

                        <h3>Il manque des informations, veuillez recommencer</h3>

                        <?php

                        }

                        ?>

<?php

$mail = 'levieuxmoulin.chinaillon@gmail.com'; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.

{

    $passage_ligne = "\r\n";

}

else

{

    $passage_ligne = "\n";

}

//=====Déclaration des messages au format texte et au format HTML.

$message_txt = 'Bonjour,'."\r\n\r\n";
$message_txt .= 'Ce mail a été envoyé depuis le site du vieux moulin par '. $nom .' '. $prenom . "\r\n\r\n";
$message_txt .= 'Voici le message qui vous est adressé :'."\r\n";
$message_txt .= '***************************'."\r\n";
$message_txt .= $message."\r\n";
$message_txt .= '***************************'."\r\n"; 
//==========

//=====Création de la boundary.

$boundary = "-----=".md5(rand());

$boundary_alt = "-----=".md5(rand());

//==========

 

//=====Définition du sujet.

$sujet = "";

//=========

 

//=====Création du header de l'e-mail.

$header = 'From: ' . $nom . ' ' . $prenom . ' <'.$email_expediteur.'>'."\n";

$header.= 'Reply-to: <'.$email_reply.'>'."\n";

$header.= 'MIME-Version: 1.0'."\n";

$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

 

//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;

$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);

 

//==========

?>