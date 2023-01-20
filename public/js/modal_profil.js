let btn_profil = document.querySelector(".icon-profil");
let body_profil = document.querySelector(".modal-profil");

btn_profil.addEventListener("click", function(e){
    e.preventDefault();
    if(body_profil.classList.contains("disabled")){
        body_profil.classList.remove("disabled");            
    }else{
        body_profil.classList.add("disabled");
    }
});