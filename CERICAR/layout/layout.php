<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CERICAR</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://pedago.univ-avignon.fr/~uapv2201797/squelette_L3/css/w3.css">
    <link rel="stylesheet" href="https://pedago.univ-avignon.fr/~uapv2201797/squelette_L3/css/style.css">
	</head>

  <body>
    <h2>Super c'est ton appli ! </h2>
    <?php if($context->getSessionAttribute('user_id')): ?>
	<?php echo $context->getSessionAttribute('user_id')." est connecte"; ?>
     <?php endif; ?>

    <div id="page">
      
      
      <div id="page_maincontent">	
      	<?php include($template_view); ?>
      </div>
      <?php if($context->notif): ?>
      	<div id="flash_notif" class="w3-panel w3-orange">
            <?php echo $context->notif ?>
      	</div>
      <?php endif; ?>
      <?php if($context->error): ?>
      	<div id="flash_error" class="w3-panel w3-red">
        	<?php echo $context->error ?>
      	</div>
      <?php endif; ?>
    </div>
      

  </body>

</html>
