document.addEventListener("DOMContentLoaded", function(){

var btnplus=document.querySelector('.quantite_plus');
var btnmoins=document.querySelector('.quantite_moins');
var nbvoyageur=document.getElementById('nombre_voyageurs');

// CALCUL DU PRIX EN FONCTION DU NOMBRE DE VOYAGEURS
var prixtotalel=document.querySelector('.total_calcule');

var prix = 0;
var prixelements = document.querySelectorAll('.prix_panier');
prixelements.forEach(function(el){
    prix += parseInt( (el.innerHTML).slice(0, -2) );
}) // += ca va additionner ancienne valeur de prix avec ce quis e trouve a droite du +=

// CALCUL PRIX TOTAL
function Total (){
    var prixtotal=prix*nbvoyageur.value;
    prixtotalel.innerHTML = prixtotal;
}

Total();

// decrementer
btnmoins.addEventListener('click',function(){
    nbactuel=parseInt(nbvoyageur.value);
    if (nbactuel > 1){
        nbvoyageur.value=nbactuel -1;
        Total();
    }
    if(nbactuel==1){
        nbvoyageur.value=nbactuel;
        Total();
    }
})

// incrementer
btnplus.addEventListener('click',function(){
    var nbactuel=parseInt(nbvoyageur.value);
    if (nbactuel < 5){
        nbvoyageur.value=nbactuel +1;
        Total();
    }
})


console.log(prix); 




})