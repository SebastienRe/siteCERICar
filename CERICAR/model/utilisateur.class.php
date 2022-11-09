<?php

use Doctrine\Common\Collections\ArrayCollection;

/** 
 * @Entity
 * @Table(name="jabaianb.utilisateur")
 */
class utilisateur{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="string", length=45) */ 
	public $identifiant;
		
	/** @Column(type="string", length=45) */ 
	public $pass;

	/** @Column(type="string", length=45) */ 
	public $nom;

	/** @Column(type="string", length=45) */ 
	public $prenom;

	/** @Column(type="string", length=200) */ 
	public $avatar;

	public function __toString()
    {
        $format = "Utilisateur (id: %s, identifiant: %s, pass: %s, nom: %s, prenom: %s, avatar: %s)\n";
        return sprintf($format, $this->id, $this->identifiant, $this->pass, $this->nom, $this->prenom, $this->avatar);
    }
}

?>
