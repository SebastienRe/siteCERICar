<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CERICAR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pedago.univ-avignon.fr/~uapv2201797/squelette_L3/css/w3.css">
    <link rel="stylesheet" href="https://pedago.univ-avignon.fr/~uapv2201797/squelette_L3/css/style.css">
	</head>

  <body>
    <?php if($context->getSessionAttribute('user_id')): ?>
	    <?php echo $context->getSessionAttribute('user_id')." est connecte"; ?>
    <?php endif; ?>

    <div id="page">

      <!-- Header -->
    <header class="w3-container w3-center w3-padding-32"> 
      <h1><b>CERICAR</b></h1>
    </header>
      <div id="page_maincontent">	
      	<?php include($template_view); ?>
      </div>

      <?php if(affichage::get_notif()): ?>
      	<div id="flash_notif" class="w3-panel w3-orange">
            <?php echo affichage::get_notif() ?>
      	</div>
      <?php endif; ?>
      <?php if(affichage::get_error()): ?>
      	<div id="flash_error" class="w3-panel w3-red">
        	<?php echo affichage::get_error() ?>
      	</div>
      <?php endif; ?>

      <footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Site Développé par Sébastien Ré dans le cadre la formation licence informatique en 3nd année, matière : dbweb5</p>
        <p class="w3-medium">template CSS basé sur <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
      </footer>
    </div>
  </body>

</html>
