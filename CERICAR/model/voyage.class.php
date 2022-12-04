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
        $format="<tr>
                    <td>
                        %s
                    </td>
                    <td>
                        %s
                    </td>
                    <td>
                        %s
                    </td>
                    <td>
                        %s
                    </td>
                    <td>
                        %s
                    </td>
                    <td>
                        %s
                    </td>
                    <td>
                        %s
                    </td>
                </tr>";
        return sprintf($format, $this->trajet->depart, $this->trajet->arrivee
                        , $this->heureDepart, $this->nbPlace, $this->conducteur->nom
                        , $this->conducteur->prenom, $this->contraintes);
        
    }
}

?>