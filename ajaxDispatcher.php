<?php
//nom de l'application
$nameApp = "CERICAR";

//action par défaut
$action = "monApplication";//action principale
if(key_exists("action", $_REQUEST))# si action est dans $_request
	$action =  $_REQUEST['action'];
else $action = "index";

require_once 'lib/core.php';
require_once $nameApp.'/controller/mainController.php';#on inclut le controlleur

foreach(glob($nameApp.'/model/*.class.php') as $model) #pour chaque fichier .class.php
	include_once $model ; # l'inclure

session_start();

$context = context::getInstance();
$context->init($nameApp);

try{
	//on execute l'action demandée par l'utilisateur
	$view=$context->executeAction($action, $_REQUEST);
	if($view==false || $view==context::NONE) 
		throw new Exception($action);
	$view_path=$nameApp."/view/".$action.$view.".php";//chemin de la vue 
	echo "coucou";
	include($view_path);//on inclut le layout
}
catch(Exception $e){
	$affichage::trigger_error("view is not set in action=".$e->getMessage());
}
?>