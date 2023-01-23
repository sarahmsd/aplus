let edit_icons = document.querySelectorAll(".edit-icon");

edit_icons.forEach(e => {
    let input = e.parentElement.firstElementChild.nextElementSibling;
    input.setAttribute("disabled", "true");
    let c = input.getAttribute("class");
    e.addEventListener("click", function(){        
        input.removeAttribute("disabled");
        input.focus();
        input.setAttribute("class", c+" focus");
    });
});

let btn_retirer_investisseurs = document.querySelectorAll(".btn-retirer-investisseur");
btn_retirer_investisseurs.forEach(e => {
    let investisseur = e.parentElement;
    e.addEventListener("click", function(){
        investisseur.setAttribute("style", "display: none");
    });
});