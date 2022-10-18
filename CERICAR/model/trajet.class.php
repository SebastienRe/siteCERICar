<?php

use Doctrine\Common\Collections\ArrayCollection;

class trajet{

	/** @Column(type="int", primary key) */ 
	public $id;

    /** @Column(type="string", length=45) */
	public $depart;

    /** @Column(type="string", length=45) */
	public $arrivee;

    /** @Column(type="int") */
	public $distance;
	
}

?>