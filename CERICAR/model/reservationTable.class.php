<?php
// Inclusion de la classe reservation
require_once "reservation.class.php";

class reservationTable {
    public static function getReservationByVoyage($voyage){
        /*permet de collecter l'ensemble des reservations correspondant à un voyage, via une requête
        récupérant les données de la table reservation. Cette méthode retournera
        une collection contenant des objets de type reservation.*/
        $em = dbconnection::getInstance()->getEntityManager() ;

		$userRepository = $em->getRepository('reservation');
		$reservations = $userRepository->findBy(array('voyage' => $voyage));

        if ($reservations == null)
			affichage::trigger_error("reservations non trouvé");
        
		return $reservations; 
    } 
}

?>