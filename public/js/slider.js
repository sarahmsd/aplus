let slider = document.getElementById("slider");
let slides_group = document.getElementsByClassName("slide-group");
let nbr_slides_group = slides_group.length;
let count = 1;
let btn_prev = document.getElementById('prev');
let btn_next = document.getElementById('next');

function show_slide(slide){
    slide.setAttribute("style", "display: null");
}


function hide_slide(slide){
    for (let i = 0; i < slide.length; i++) {
        slide[i].setAttribute("style", "display: none");
    }
}

function nextSlide(count, nbr_slides_group){
    hide_slide(document.getElementsByClassName("slide-group"));
    if(count >= nbr_slides_group){
        show_slide(document.getElementById("slide-group-1"));
    }else{
        show_slide(document.getElementById("slide-group-"+(count+1)));
    }
}

function prevSlide(count){
    hide_slide(document.getElementsByClassName("slide-group"));
    if(count > 1){
        show_slide(document.getElementById("slide-group-" +(count-1)));
    }else{
        show_slide(document.getElementById("slide-group-1"));
    }
}


/* function slide(){   
    
    while(count < nbr_slides_group){
        setInterval(() => {
            hide_slide(document.getElementsByClassName("slide-group"));
            show_slide(document.getElementById("slide-group-" +count));
        }, 8000);
        
        count++;
    }
}



window.onload = function() {    
    setInterval(() => {
        slide();
    }, 8000);
} */

btn_next.addEventListener('click', function(){
    nextSlide(count, nbr_slides_group);
});

btn_prev.addEventListener('click', function(){
    prevSlide(count);
});
