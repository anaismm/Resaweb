// pour que tous les nom ou prenooms commence par majuscules puis la suite sont en minuscules
function normalisePrenom(chaine){
    var result = "";
    if (chaine.length !== 0) {
        result = (chaine[0]).toUpperCase()+(chaine.substring(1,chaine.length)).toLowerCase()
    }
    return result;
}


// pour que les noms composés ont des majuscules à leurs premiers mot puis que ce soit des minuscules
function normalisePrenomCompose(element) {
    var chaine = element.value;
    const tiretetplus = /-.+/; //regex c'est une regular expression. on va chercher un tiret plus quelque chose (n'importe quel caractere) c'ets pourquoi je concatene avec le point
    if  (tiretetplus.test(chaine)) { // test est une méthode comme l'est split qui elle permet de tester la regular expression et de voir si y a un tiret
        var composantsNom = chaine.split("-");
        var resultat = "";
        composantsNom.forEach( function (el) {
            if(resultat.length>0){
                resultat += "-";
            }
            resultat += normalisePrenom(el);
        });
    } else {
        resultat = normalisePrenom(chaine);
    }
    element.value = resultat; // on remplace la valeur de l'element en entree par ce resultat
}

function normaliseNom(element){
    var chaine = element.value;
    var result = "";
    if (chaine.length !== 0) {
        result = (chaine).toUpperCase()
    }
    element.value = result;
}