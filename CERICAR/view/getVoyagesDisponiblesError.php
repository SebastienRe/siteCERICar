
<div class="w3-section w3-container">
    <div class="w3-light-grey w3-panel w3-card">
        <h1>Voyages Proposés</h1>
        <form action="" method="get">
            <div class="w3-row">
                <div class="w3-third w3-container w3-padding">
                    <label class="form-label">Départ</label>
                    <input class="form-control" id="depart" name="depart" value="<?php echo $_REQUEST['depart']?>">
                </div>
                <div class="w3-third w3-container w3-padding">
                    <label class="form-label">Arrivée</label>
                    <input class="form-control" id="arrivee" name="arrivee" value="<?php echo $_REQUEST['arrivee']?>">
                </div>
                <div class="w3-third w3-container w3-padding">
                    <button type="submit" name="action" value="getVoyagesDisponibles" class="w3-button w3-green">Envoyer</button>
                </div>
            </div>
        </form>
        <p>Erreur détectée, ne peux afficher la table</p>
    </div>
</div>