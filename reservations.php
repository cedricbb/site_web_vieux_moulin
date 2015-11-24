<!DOCTYPE html>

<html>
    
	<head>
        
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Réservations LVM</title>
        
	</head>
    
    <body>
            
        <div id="wrapper">
        
			<?php include("header.php") ?>
			
			<?php include("menu.php") ?>
				
				<section><!-- contenu de la page -->
                    
					<h2>Reservez votre séjour au chalet.</h2>
                    
					<article>
                        
					   <h3>Disponibilités du chalet:</h3>
                        
					   <table id="table">
                           
					       <tr>
                        
						      <td>
                            
							     <iframe src="http://www.shared-house.com/vacancy_planning.php?numero=54343&langue=fr&style=2&embed=c83693d277ad5fe8218d056057e7305b" id="calendar">
							     </iframe>
                            
						      </td>	
                        
					       </tr>	
                           
					   </table>
                        
					</article>
                    
					<aside>
                        
                        <h3>Prix en fonction de la période:</h3>
                        
                            <h4>Haute Saison:</h4>
                        
                            <p>Prix à la semaine: de 2400 € à 2950 €<br />
                                Prix au week-end: de 750 € à 850 €</p>
                        
                            <h4>Basse saison:</h4>
                        
                            <p>Prix à la semaine: de 1200 € à 1600 €<br />
							Prix au week-end: de 400 € à 500 €</p>
                        
                            <h4>Option ménage:</h4>
            
                            <p> 150 €</p>
                        
                            <h4>Modes de paiements:</h4>
                        
                            <p> Chèques Vacances, chèque, espèces, virement</p>
                        
					</aside>
                    
				</section><!-- fin contenu de la page -->
					
			<?php include("footer.php") ?>
            
		</div>
        
	</body>
    
</html>