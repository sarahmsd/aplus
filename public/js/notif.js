let id_notif = document.getElementById("btn-notif");
let bloc_notif = document.getElementById("notifs-bloc");

id_notif.addEventListener("click", function(e){
    e.preventDefault();
    if(bloc_notif.classList.contains("disabled")){
        bloc_notif.classList.remove("disabled");
        bloc_notif.setAttribute("style", "display: inline-block");
    }else{
        bloc_notif.classList.add("disabled");
        bloc_notif.setAttribute("style", "display: none");
    }
        
});
