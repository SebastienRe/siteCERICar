<?php

use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @Entity
 * @Table(name="jabaianb.trajet")
 */
class trajet{

	/**  @Column(type="integer")
     *  @Id @GeneratedValue*/  
	public $id;

    /** @Column(type="string", length=45) */
	public $depart;

    /** @Column(type="string", length=45) */
	public $arrivee;

    /** @Column(type="integer") */
	public $distance;

	public function __toString()
    {
        $format = "Trajet (id: %s, depart: %s, arrivee: %s, distance: %s)\n";
        return sprintf($format, $this->id, $this->depart, $this->arrivee, $this->distance);
    }
}

?>