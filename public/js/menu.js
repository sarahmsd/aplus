let btn_toggle = document.getElementById("btn-toggle");
let menu_toggle = document.getElementById("menu-toggle");

btn_toggle.addEventListener('click', function(){
    if(menu_toggle.classList.contains("disabled")){
        menu_toggle.classList.remove('disabled');
        menu_toggle.setAttribute("style", "display: grid");
    }else{
        menu_toggle.classList.add('disabled');
        menu_toggle.setAttribute("style", "display: none");
    } 
    
});