
<div class="w3-section w3-container">
    <div class="w3-light-grey w3-panel w3-card " style="overflow-x:auto";>
        <h1>Voyages Proposés</h1>
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