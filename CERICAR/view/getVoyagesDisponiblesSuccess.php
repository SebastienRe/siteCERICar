
<div class="w3-section w3-container">
    <div class="w3-light-grey w3-panel w3-card " style="overflow-x:auto";>
        <h1>Voyages Proposés</h1>
        <form action="" method="get">
            <div class="w3-row">
                <div class="w3-third w3-container w3-padding">
                    <label class="form-label">Départ : </label>
                    <input class="form-control" id="depart" name="depart" value="<?php echo $_REQUEST['depart']?>">
                </div>
                <div class="w3-third w3-container w3-padding">
                    <label class="form-label">Arrivée : </label>
                    <input class="form-control" id="arrivee" name="arrivee" value="<?php echo $_REQUEST['arrivee']?>">
                </div>
                <div class="w3-third w3-container w3-padding">
                    <button type="submit" name="action" value="getVoyagesDisponibles" class="w3-button w3-green">Envoyer</button>
                </div>
            </div>
        </form>
        <div class="w3-container w3-padding">
            <table class="w3-table-all">
                    <thead>
                        <tr>
                            <th>Départ</th>
                            <th>Arrivée</th>
                            <th>Heure de Départ</th>
                            <th>nombre de Places</th>
                            <th>Nom conducteur</th>
                            <th>Prénom conducteur</th>
                            <th>Contraintes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach( $context->getVoyagesDisponibles as $data ){ ?>
                        <tr>
                            <td>
                                <?php echo $data->trajet->depart;?>
                            </td>
                            <td>
                                <?php echo $data->trajet->arrivee;?>
                            </td>
                            <td>
                                <?php echo $data->heureDepart;?>
                            </td>
                            <td>
                                <?php echo $data->nbPlace;?>
                            </td>
                            <td>
                                <?php echo $data->conducteur->nom;?>
                            </td>
                            <td>
                                <?php echo $data->conducteur->prenom;?>
                            </td>
                            <td>
                                <?php echo $data->contraintes?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>   
        </div> 
    </div>
</div>