// Description: Javascript pour le squelette L3
// Partie ajax
$(document).ready(function() 
{
	$('.getVoyagesDisponibles').submit(function(e){//click du bouton de recherche
        e.preventDefault();//on empêche le bouton d'envoyer le formulaire
        //affiche dans terminal
        console.log('click sur le bouton de recherche');
        //on récupère les données du formulaire
        console.log($("#depart").val())

        $.ajax({// on utilise la fonction ajax de jquery
            type: 'get', // la méthode de transmission des données au fichier php
            url: "ajaxDispacher.php?action=getVoyagesDisponibles&depart=" + $("#depart").val() + "&arrivee=" + $("#arrivee").val() + "&nbPersonnes" + $("#nbPersonnes").val(), // on donne l'URL du fichier de traitement
        })
            .done(function (response) {// si l'appel a bien fonctionné
                $("#afficheVoyages").html(response);// on affiche la réponse
            })


    }
)	

/*$(document).ready(function() {
    // Action qui est exécutée quand le formulaire de recherche de voyage est envoyé
    $('.getVoyagesDisponibles').submit(function(e) 
    {
        e.preventDefault(); // On empêche de soumettre le formulaire
        var $depart = $(this).find("input[name=depart]").val();
        var $arrivee = $(this).find("input[name=arrivee]").val();
        var $nbrPassager = $(this).find("input[name=nbrPassager]").val();
        var $action = $(this).find("button[name=action]").val();
        alert($depart+"|"+$arrivee+"|"+$nbrPassager+"|"+$actionMidRight);
        $('.loader').show();
        $.ajax(
        {
            url: "ajaxDispatcher.php",
            type: $(this).attr('method'),
            data: {depart : $depart, arrivee : $arrivee, nbrPassager : $nbrPassager, action : $action},
            //dataType: 'json',
        }).done(function(reponse){
            //alert("Reussite : "+reponse);
            $('.voyagesTrouves').html(reponse);
        }).fail(function(reponse){
            alert("Echec : "+reponse);
        }).always(function(){
            $('.loader').hide();
        });
    });
});*/

});
