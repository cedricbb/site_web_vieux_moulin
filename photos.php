<!DOCTYPE html>

<html>
    
	<head>
        
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="lightbox2.css" type="text/css" media="screen, print, handheld" />
        <title>Photos LVM</title>
        
	</head>
    
    <body>
            
	   <div id="wrapper">
           
			<?php include("header.php") ?>
			
			<?php include("menu.php") ?>
				
				<section id="content"><!-- contenu de la page -->
                    
					<h2>Quelques photos.</h2>
                    
					<p class="paragraphe">Voici quelques photos du chalet extérieur et intérieur, ainsi que des photos de soirées passées là-haut.<p>
                    
					       <?php include("photo_gallery.php") ?>                    
           </section>
           
           <div>
               <br /><br /><br />
           </div>
           
			<?php include("footer.php") ?>
           
		</div>
        
	</body>
    
</html>