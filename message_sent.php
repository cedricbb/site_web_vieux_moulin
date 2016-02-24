<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8" />
        <link href="style.css" rel="stylesheet" />

    </head>

    <body>
        <div id="wrapper">
           <?php include("header.php") ?>
            
           <?php include("menu.php") ?>
            
            <section id="content"><!-- contenu de la page -->
            
                <div>
					<?php
					   require("PHPMailer/class.phpmailer.php"); // path to the PHPMailerAutoload.php file.
					 
					   $mail = new PHPMailer();
					   $mail->IsSMTP();
					   $mail->Mailer = "smtp.free.fr";
					   $mail->Host = "www.free.fr";
					   $mail->Port = "25"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
					   $mail->SMTPAuth = true;
					   $mail->SMTPSecure = '';
					   $mail->Username = "vieux.moulin";
					   $mail->Password = "yass11";
					    
					   $mail->From     = $_POST['email'];
					   $mail->FromName = $_POST['nom'];
					   $mail->AddAddress("levieuxmoulin.chinaillon@gmail.com");
					   $mail->AddReplyTo($_POST['email']);
					 
					   $mail->Subject  = $_POST['demande'];
					   $mail->Body     = $_POST['message'];
					   $mail->WordWrap = 50;  
					 
					   if(!$mail->Send()) {
							echo 'Message was not sent.';
							echo 'Mailer error: ' . $mail->ErrorInfo;
							exit;
					   } else {
							echo 'Message has been sent.';
					   }
					?>
				</div>
                
            </section><!-- fin contenu de la page -->
            
            <?php include("footer.php") ?>
            
        </div>
        
    </body>
    
</html>




