<?php

use Doctrine\Common\Collections\ArrayCollection;

class voyage{

    /** @Column(type="int", primary key) */ 
	public $id;

    /** @Column(type="int", utilisateur) */
    public $conducteur;

    /** @Column(type="int", foreign key) */
    public $trajet;

    /** @Column(type="int") */
    public $tarif;

    /** @Column(type="int") */
    public $nbPlace;

    /** @Column(type="int") */
    public $heureDepart;

    /** @Column(type="varchar", taille=500) */
    public $contraites;
	
}

?>