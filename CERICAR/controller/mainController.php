<?php
class mainController
{
	
	public static function helloWorld($request,$context)
	{
		$context->mavariable="hello world";
		return context::SUCCESS;
	}

	public static function index($request,$context){
		return context::SUCCESS;
	}

	public static function superTest($request, $context){
		if (isset($request['param1']) && isset($request['param2'])){
			$context->param1 = $request['param1'];
			$context->param2 = $request['param2'];
		}
		return context::SUCCESS;
	}

	public static function connexion($request, $context){
		if (isset($request['id']) && isset($request['pass'])){
			$user = utilisateurTable::getUserByLoginAndPass($request['id'], $request['pass']);
			$context->id = $user->identifiant;
		}
		return context::SUCCESS;
	}

	public static function userById($request, $context){
		if (isset($request['id'])){
			$user = utilisateurTable::getUserById($request['id']);
			$context->user = $user;
		}
		return context::SUCCESS;
	}

	public static function reservationByVoyage($request, $context){
		if (isset($request['voyage'])){
			$reservations = reservationTable::getReservationByVoyage($request['voyage']);
			$context->reservations = $reservations;

		}
		return context::SUCCESS;
	}

	public static function trajet($request, $context){
		if (isset($request['depart']) && isset($request['arrivee'])){
			$trajet = trajetTable::getTrajet($request['depart'], $request['arrivee']);
			$context->trajet = $trajet;
		}
		return context::SUCCESS;
	}

	public static function voyagesByTrajet($request, $context){
		if (isset($request['trajet'])){
			$voyages = voyageTable::getVoyagesByTrajet($request['trajet']);
			$context->voyages = $voyages;
		}
		return context::SUCCESS;
	}

	public static function getVoyagesDisponibles($request, $context){
		$getVoyagesDisponibles = voyageTable::getVoyages();
		$context->getVoyagesDisponibles = $getVoyagesDisponibles;
		if ($context->getVoyagesDisponibles == FALSE)
			return context::ERROR;
		return context::SUCCESS;
	}
}
// context::ERROR
// context::NONE

