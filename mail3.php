<?php
/* Si le formulaire est envoyé alors on fait les traitements */
if (isset($_POST['envoye']))
{
    /* Récupération des valeurs des champs du formulaire */
    if (get_magic_quotes_gpc())
    {
      $nom	     	= stripslashes(trim($_POST['nom']));
      $prenom   	= stripslashes(trim($_POST['prenom']));
      $email		= stripslashes(trim($_POST['email']));
      $message		= stripslashes(trim($_POST['message']));
    }
    else
    {
      $nom		    = trim($_POST['nom']);
      $prenom   	= trim($_POST['prenom']);
      $email		= trim($_POST['email']);
      $message		= trim($_POST['message']);
    }
 
    /* Expression régulière permettant de vérifier si le 
    * format d'une adresse e-mail est correct */
    $regex_mail = '/^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$/i';
 
    /* Expression régulière permettant de vérifier qu'aucun 
    * en-tête n'est inséré dans nos champs */
    $regex_head = '/[\n\r]/';
 
    /* Si le formulaire n'est pas posté de notre site on renvoie 
    * vers la page d'accueil */
    if($_SERVER['HTTP_REFERER'] != 'http://vieux.moulin.free.fr/send_email.php')
    {
      header('Location: http://vieux.moulin.free.fr/');
    }
    /* On vérifie que tous les champs sont remplis */
    elseif (empty($nom) 
           || empty($prenom) 
           || empty($email) 
           || empty($message))
    {
      $alert = 'Tous les champs doivent être renseignés';
    }
    /* On vérifie que le format de l'e-mail est correct */
    elseif (!preg_match($regex_mail, $email))
    {
      $alert = 'L\'adresse '.$email.' n\'est pas valide';
    }
    /* On vérifie qu'il n'y a aucun header dans les champs */
    elseif (preg_match($regex_head, $email) 
            || preg_match($regex_head, $nom) 
            || preg_match($regex_head, $prenom))
    {
        $alert = 'En-têtes interdites dans les champs du formulaire';
    }
    /* Si aucun problème et aucun cookie créé, on construit le message et on envoie l'e-mail */
    elseif (!isset($_COOKIE['sent']))
    {
        /* Destinataire (votre adresse e-mail) */
        $to = 'levieuxmoulin.chinaillon@gmail.com';
 
        /* Construction du message */
        $msg  = 'Bonjour,'."\r\n\r\n";
        $msg .= 'Ce mail a été envoyé depuis le site du vieux moulin par '.$nom.' '.$prenom."\r\n\r\n";
        $msg .= 'Voici le message qui vous est adressé :'."\r\n";
        $msg .= '***************************'."\r\n";
        $msg .= $message."\r\n";
        $msg .= '***************************'."\r\n";
 
        /* En-têtes de l'e-mail */
        $headers = 'From: '.$nom.' <'.$email.'>'."\r\n\r\n";
 
        /* Envoi de l'e-mail */
        if (mail($to, $sujet, $msg, $headers))
        {
            $alert = 'E-mail envoyé avec succès';
 
            /* On créé un cookie de courte durée (ici 120 secondes) pour éviter de 
            * renvoyer un mail en rafraichissant la page */
            setcookie("sent", "1", time() + 120);
 
            /* On détruit la variable $_POST */
            unset($_POST);
        }
        else
        {
            $alert = 'Erreur d\'envoi de l\'e-mail';
        }
 
    }
    /* Cas où le cookie est créé et que la page est rafraichie, on détruit la variable $_POST */
    else
    {
        unset($_POST);
    }
}
?>
