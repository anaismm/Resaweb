document.addEventListener("DOMContentLoaded", function(){

// Pour le carrousel destinations
const allDest= document.querySelector('.all_dest');
const btn_right=document.querySelector('.btn-right');
const btn_left=document.querySelector('.btn-left');
const dest_card=document.querySelectorAll('.dest_card');
var destWidth=dest_card[0].offsetWidth +5; //reflechir a quoi correspond le 5 je pense que c'est juste une constante

var destCarouselPosition=allDest.scrollLeft;
var destCarouselMinPosition=0;
var destCarouselMaxPosition=4;

btn_right.addEventListener('click', function(suivant){
    destCarouselPosition++;
    if(destCarouselPosition>destCarouselMaxPosition){
        destCarouselPosition=destCarouselMaxPosition; //moi j ai mis max a voir
        allDest.scrollLeft=destCarouselPosition*destWidth;
    }
    else{
        allDest.scrollLeft=destCarouselPosition*destWidth;
    }
})

btn_left.addEventListener('click',function(precedent){
    if(destCarouselPosition<destCarouselMinPosition+1){
        destCarouselPosition=0
    }
    else{
        destCarouselPosition--;
        allDest.scrollLeft=destCarouselPosition*destWidth;
    }
})



})