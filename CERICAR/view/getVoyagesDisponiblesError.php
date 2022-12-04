
<div class="w3-section w3-container">
    <div class="w3-light-grey w3-panel w3-card">
        <h1>Voyages Proposés</h1>
        <form action="" class="getVoyagesDisponibles" method="get">
            <div class="w3-row">
                <div class="w3-quarter w3-container w3-padding">
                    <input class="form-control" id="depart" name="depart" placeholder="nom ville de départ" required name="depart">
                </div>
                <div class="w3-quarter w3-container w3-padding">
                    <input class="form-control" id="arrivee" name="arrivee" placeholder="nom ville de d'arrivée" required name="arrivee">
                </div>
                <div class="w3-quarter w3-container w3-padding">
                    <input class="form-control" id="nbPersonnes" name="nbPersonnes" placeholder="nombres de personnes" required name="nbPersonnes">
                </div>
                <div class="w3-quarter w3-container">
                    <button type="submit" name="action" value="getVoyagesDisponibles" class="w3-button w3-green">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
</div>