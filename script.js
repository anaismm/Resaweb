document.addEventListener("DOMContentLoaded", function(){

// Pour la barre de nav 
window.addEventListener("scroll", () => {
    let nav = document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 0);
});



    // POUR SELECTION D'IMAGE SUR PAGE PRODUIT ET QU ELLES SE METTENT EN GRAND QUAND ON CLIQUE DESSUS
    
    var petitesphotos=document.querySelectorAll('.petite')
    petitesphotos.forEach(function(petitephoto){
        petitephoto.addEventListener('click',function(agrandir){
            // je récupère l'url de l'image de fond de ma grande image
            var grandephoto=document.querySelector('.grande');
            var grandephotoUrl=window.getComputedStyle(grandephoto).backgroundImage;
    
            // je récupère l'url de limage defon de ma petite image cliquée
            var petitephotoUrl=window.getComputedStyle(petitephoto).backgroundImage;
    
            grandephoto.style.backgroundImage=petitephotoUrl;
            petitephoto.style.backgroundImage=grandephotoUrl;
    
        })
    })
    
})




