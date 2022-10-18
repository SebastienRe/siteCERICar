<?php
class context
{
    private $data; # contient des variables 
    const SUCCESS="Success";
    const ERROR="Error";
    const NONE="None";
    private $name;
    private static $instance=null;
	
	 /**
     * @return context
     */
	public static function getInstance()
	{
		if(self::$instance==null)
		  self::$instance=new context();
		return self::$instance; 
	}
	
	private function __construct()
	{
		
	}

	function trigger_notification($notification)
	{
		if (!$this->notif)
			$this->notif = "<h3>Notifications : </h1><p> -> ${notification}</p>";
		else
			$this->notif = "$this->notif<p> -> ${notification}</p>";
	}

	function trigger_error($error)
	{
		if (!$this->error)
			$this->error = "<h3>ERREURS : </h1><p> -> ${error} !!!</p>";
		else
			$this->error = "$this->error<p> -> ${error} !!!</p>";
	}

	public function init($name)
	{
       $this->name=$name;
       
	}
	
	public function getLayout()
	{
		 return $this->layout;
	}

	public function setLayout($layout)
	{
		$this->layout=$layout;
	}	
	
	public function redirect($url)
	{
		header("location:".$url); 
	}

	public function executeAction($action,$request) # ?action = nom de fonction dans mainController
	{
		$this->layout="layout";
		if(!method_exists('mainController',$action))
		  return false;
		
		return  mainController::$action($request,$this);
		
	}
	
	public function getSessionAttribute($attribute)
	{
		if(array_key_exists($attribute, $_SESSION))		
			return $_SESSION[$attribute];
		else
			return NULL;
	}
	
	public function setSessionAttribute($attribute,$value)
	{
		$_SESSION[$attribute]=$value;
	}
    
	
	public function __get($prop) # get variables from data
    	{
		if(array_key_exists($prop, $this->data))        	
			return $this->data[$prop];
		else
			return NULL;      
    	}
    
   	public function __set($prop,$value) # set variables from data
    	{
        	$this->data[$prop]=$value;      
    	}
	
}
