<?php

use Doctrine\Common\Collections\ArrayCollection;
/** 
 * @Entity
 * @Table(name="jabaianb.reservation")
 */
class reservation{

	/**  @column(name="id", type="integer") 
     * @Id @GeneratedValue*/  
	public $id;

    /**
    * @ManyToOne(targetEntity="voyage")
    * @JoinColumn(name="voyage", referencedColumnName ="id")
    */
    public $voyage;

    /**
    * @ManyToOne(targetEntity="utilisateur")
    * @JoinColumn(name="voyageur", referencedColumnName ="id")
    */  
    public $voyageur;

    public function __toString()
    {
        $format = "Reservation (id: %s, voyage: %s, voyageur: %s)\n";
        return sprintf($format, $this->id, $this->voyage->id, $this->voyageur->id);
    }
}

?>