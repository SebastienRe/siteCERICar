<?php
// Inclusion de la classe voyage
require_once "voyage.class.php";

class voyageTable {
    public static function getVoyagesByTrajet($trajet){
        /*permettant de collecter l'ensemble des voyages correspondant à un trajet, via une requête récupérant les
        données de la table voyage. Cette méthode retournera une collection contenant des objets de type voyage*/
        $em = dbconnection::getInstance()->getEntityManager() ;

		$userRepository = $em->getRepository('voyage');
		$voyages = $userRepository->findBy(array('trajet' => $trajet));

        if ($voyages == false)
			affichage::trigger_error("voyages non trouvé");
        
		return $voyages;

        
    } 

    public static function getVoyages($depart, $arrivee){
        $trajet = trajetTable::getTrajet($depart, $arrivee);
        
        $em = dbconnection::getInstance()->getEntityManager() ;
        $userRepository = $em->getRepository('voyage');
		$voyages = $userRepository->findBy(array('trajet' => $trajet->id));
        if ($voyages == false){
			affichage::trigger_error("voyages non trouvé");
        }
        
		return $voyages;
    }
}

?>