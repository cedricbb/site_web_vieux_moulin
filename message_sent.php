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

                    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['email'], $_POST['message']))
                        {
                           $headers = 'From: '. $_POST['nom'] . '\r\n' . 'Reply-To: ' . $_POST['email'] . '\r\n' . 'X-Mailer: PHP/' . phpversion();
                           mail('levieuxmoulin.chinaillon@gmail.com', $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])


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
                </div>
                
            </section><!-- fin contenu de la page -->
            
            <?php include("footer.php") ?>
            
        </div>
        
    </body>
    
</html>