<ul> 
    <?php foreach( $context->voyages as $data ){ ?>
    
    <li><?php 
        echo "Le Conducteur : ".$data->conducteur->nom." ".$data->conducteur->prenom."<br>";
        echo "Départ : ".$data->trajet->depart.", Arrivée :".$data->trajet->arrivee ;
        echo ", tarif: ".$data->tarif.", nbPlace: ".$data->nbPlace.", heureDepart: ".$data->heureDepart.", contraintes: ".$data->contraintes; 
    ?></li> 
    <?php } ?>
</ul>