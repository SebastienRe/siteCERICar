<?php 
echo "conducteur :".$context->reservations[0]->voyage->conducteur->nom."<br>";
echo "heuredepart :".$context->reservations[0]->voyage->heureDepart."<br>";
foreach( $context->reservations as $data ){ ?>
    <?php 
    echo "voyageur :".$data->voyageur->nom."<br>";
    ?>
<?php } ?>