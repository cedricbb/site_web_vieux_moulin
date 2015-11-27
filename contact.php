<!DOCTYPE html>

<html>
    
	<head>
        
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>L'hébergement LVM</title>
        
	</head>
    
    <body>
            
	   <div id="wrapper">
           <?php include("header.php") ?>
			
           <?php include("menu.php") ?>
				
                <section id="content"><!-- contenu de la page -->
                    
					<h2>Vous avez une question? Une suggestion?</h2>
                    
					<p class="paragraphe">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais<p>
                    
					<div>
                        
						<form action="message_sent.php" method="post" name="contact" id="formulaire">

                            <label for="nom">Nom</label>
                            
							     <input type="text" name="nom" id="nom" required>
                            
                            <label for="prenom">Prénom</label>
                            
							     <input type="text" name="prenom" id="prenom" required>
                            
                            <label for="email">Email</label>
                            
							     <input type="email" name="email" id="email" required>
                            
                            <label for="demande">Votre demande concerne</label>
                            
							     <select name="demande" id="demande">
                                
							         <option value="reservation">Une réservation
                                
							         <option value="paiement">Un paiement
                                
							         <option value="renseignement">Un renseignement
                                
							         <option value="suggestion">Une suggestion
                                
							     </select><br />
                            
                            <label for="message">Votre message:</label>

							     <textarea name="message" rows="10" cols="60" id="area" required></textarea><br/>

							<input type="submit" value="Envoyer" id="bouton">
                            
						</form>
                        
					</div>
                    
				</section><!-- fin contenu de la page -->
					
			<?php include("footer.php") ?>
           
		</div>
        
	</body>
    
</html>