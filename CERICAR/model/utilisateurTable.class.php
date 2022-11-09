<?php
// Inclusion de la classe utilisateur
require_once "utilisateur.class.php";

class utilisateurTable {

	public static function getUserByLoginAndPass($login,$pass){
		/* connexion d'un utilisateur à son profil */
		$em = dbconnection::getInstance()->getEntityManager() ;

		$userRepository = $em->getRepository('utilisateur');
		$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => /*sha1*/($pass)));#sha1 cryptage
		
		if ($user == false)
			affichage::trigger_error("Utiliseur non trouvé");
		return $user; 
	}

	public static function getUserById($id){
		/*destinée à récupérer les informations d'un utilisateur selon un identifiant (id).*/
		$em = dbconnection::getInstance()->getEntityManager() ; //connexion bdd

		$userRepository = $em->getRepository('utilisateur');
		$user = $userRepository->findOneBy(array('id' => $id));


		if ($user == false)
			affichage::trigger_error("Utiliseur non trouvé");
		return $user; 
	}
}

?>
