let modules = document.querySelectorAll(".signin-module");
let input_to_load = document.querySelector(".input-to-load");
let next = document.getElementById("signin-next");
let prev = document.getElementById("signin-prev");
let step1 = document.getElementById("step1");
let step2 = document.getElementById("step2");
let c = step1.getAttribute("class");

next.addEventListener("click", function() {
    step1.setAttribute("class", c+ " disabled");
    step2.setAttribute("class", c);
});

prev.addEventListener("click", function(){
    step1.setAttribute("class", c);
    step2.setAttribute("class", c+ " disabled");

});

let unselectall = function(modules, cl){
    modules.forEach(module=>{
        module.setAttribute('class', cl);
    });
};

modules.forEach(module => {
    let c = module.getAttribute('class');
    let profil = module.getAttribute("id");
    module.addEventListener('click', function(){
        unselectall(modules, c);
        module.setAttribute('class', c+' selected');
        input_to_load.setAttribute("value", profil);
        console.log(module, input_to_load);
    });
});