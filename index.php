<?php
//nom de l'application
$nameApp = "CERICAR";

//action par défaut
$action = "index";

if(key_exists("action", $_REQUEST))# si action est dans $_request
	$action =  $_REQUEST['action'];


require_once 'lib/core.php';
require_once $nameApp.'/controller/mainController.php';#on inclut le controlleur

foreach(glob($nameApp.'/model/*.class.php') as $model) #pour chaque fichier .class.php
	include_once $model ; # l'inclure

session_start();

$context = context::getInstance();
$context->init($nameApp);
$view=$context->executeAction($action, $_REQUEST);

//traitement des erreurs de bases, reste a traiter les erreurs d'inclusion
if($view===false)
{
	echo "Une grave erreur s'est produite, il est probable que l'action ".$action." n'existe pas...";
	die;
}
//inclusion du layout qui va lui meme inclure le template view
elseif($view!=context::NONE)
{
	$template_view=$nameApp."/view/".$action.$view.".php";
	include($nameApp."/layout/".$context->getLayout().".php");
}

?>