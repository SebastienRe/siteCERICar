<?php
// Inclusion de la classe utilisateur
require_once "utilisateur.class.php";

class utilisateurTable {

	public static function getUserByLoginAndPass($login,$pass){
		/* connexion d'un utilisateur à son profil */
		$em = dbconnection::getInstance()->getEntityManager() ;

		$userRepository = $em->getRepository('utilisateur');
		$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => sha1($pass)));	
		
		if ($user == false){
			echo 'Erreur sql';
				}
		return $user; 
	}

	public static function getUserById($id){
		/*destinée à récupérer les informations d'un utilisateur selon un identifiant (id).*/
		
	}
}

?>
