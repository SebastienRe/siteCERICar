<?php

use Doctrine\Common\Collections\ArrayCollection;

class reservation{

	/** @Column(type="int", primary key) */  
	public $id;

    /** @Column(type="int", foreign key) */  
    public $voyage;

    /** @Column(type="int", foreign key) */  
    public $voyageur;
	
}

?>