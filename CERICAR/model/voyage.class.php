<?php

use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @Entity
 * @Table(name="jabaianb.voyage")
 */
class voyage{

    /** @Column(type="integer")
     *  @Id @GeneratedValue*/  
	public $id;

    /**
    * @ManyToOne(targetEntity="utilisateur")
    * @JoinColumn(name="conducteur", referencedColumnName ="id")
    */
    public $conducteur;

    /**
    * @ManyToOne(targetEntity="trajet")
    * @JoinColumn(name="trajet", referencedColumnName ="id")
    */
    public $trajet;

    /** @Column(type="integer") */
    public $tarif;

    /** @Column(type="integer") */
    public $nbPlace;

    /** @Column(type="integer") */
    public $heureDepart;

    /** @Column(type="string", length=500) */
    public $contraintes;
	
    public function __toString()
    {
        $format = "Voyage (id: %s, conducteur: %s, trajet: %s, tarif: %s, nbPlace: %s, heureDepart: %s, contraintes: %s)\n";
        return sprintf($format, $this->id, $this->conducteur->id, $this->trajet->id, $this->tarif, $this->nbPlace, $this->heureDepart, $this->contraintes);
    }
}

?>