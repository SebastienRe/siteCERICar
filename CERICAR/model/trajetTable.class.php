<?php
// Inclusion de la classe trajet
require_once "trajet.class.php";

class trajetTable {
    
    public static function getTrajet($depart, $arrivee){
        //permet de récupérer un objet du type trajet via une requête récupérant les données de la table trajet. 
        $em = dbconnection::getInstance()->getEntityManager() ;

		$userRepository = $em->getRepository('trajet');
		$trajet = $userRepository->findOneBy(array('depart' => $depart, 'arrivee' => $arrivee));

        if ($trajet == false)
			affichage::trigger_error("trajet non trouvé");
        
		return $trajet; 
    }
}

?>