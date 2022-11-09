<?php
class affichage
{
	private static $notif,$error;

    public static function trigger_notif($notification){
		if (!affichage::$notif)
			affichage::$notif = "<h3>Notifications : </h1><p> -> ${notification}</p>";
		else
			affichage::$notif = affichage::$notif."<p> -> ${notification}</p>";
	}

	public static function trigger_error($error){
		if (!affichage::$error)
			affichage::$error = "<h3>ERREURS : </h1><p> -> ${error} !!!</p>";
		else
			affichage::$error = affichage::$error."<p> -> ${error} !!!</p>";
	}

	public static function get_error(){
		return affichage::$error;
	}

	public static function get_notif(){
		return affichage::$notif;
	}
}