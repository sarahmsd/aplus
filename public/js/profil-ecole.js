let systemes_educatifs = document.querySelectorAll(".systeme-educatif");
let etablissements = document.querySelectorAll(".etablissement");
let enseignements = document.querySelectorAll(".enseignement");
let type_enseignements = document.querySelectorAll(".type-enseignement");
let cycles = document.querySelectorAll(".cycle");
let us_cycles = document.getElementById("us-cycles");
let uk_cycles = document.getElementById("uk-cycles");
let fr_cycles = document.getElementById("fr-cycles");
let type_cycles = document.querySelectorAll(".type-cycle");
let next = document.querySelectorAll(".next");
let prev = document.querySelectorAll(".prev");

let get_next_step = function(current){
    return current + 1;               
}

let get_current_step = function(current){
    let step_id = current.parentElement.getAttribute("id");
    step_id = step_id.split('-');
    step_id.splice(0,1);
    return parseInt((step_id.toString()), 10);
}

let get_prev_step = function(current){        
    return current - 1;        
}

let show_step = function(step){
    document.getElementById("step-"+step).setAttribute("class", "step-"+step);
}

let hide_step = function(step){
    document.getElementById("step-"+step).setAttribute("class", "disabled step-"+step);
}

let hideall = function(enseignement, c){
    enseignement.forEach(enseignement => {
        enseignement.setAttribute('class', c);
    });
}

let hide = function(e, c){
    e.setAttribute('class', c);
}

let unselectall = function(modules, cl, i){
    modules.forEach(module=>{
        module.setAttribute('class', cl);
        i.setAttribute("value", "");
    });
};

let unselect = function(items, c){
    items.forEach(item=>{
        let c_item = item.getAttribute('class')
        item.setAttribute('class', c_item);
        let i = item.parentElement.querySelector("."+c);
        i.setAttribute("value", "");
    });
}

let unselectallEnseignements = function(modules, c){
    modules.forEach(module => {
        let i = module.parentElement.querySelector(".input_multiple");
        module.setAttribute('class', c);
        i.setAttribute("value", "");
    });
}

let unselectoneEnseignement = function(item){
    let i = item.parentElement.querySelector(".input_multiple");
    item.setAttribute('class', "type-enseignement signin-module");
    i.getAttribute("value");
}

let removeValue = function(value_to_remove, string){
    let values = string.split(",");
    for (let i = 0; i < values.length; i++) {
        if(values[i] === value_to_remove){
            values.splice(i, 1); 
        }
    }
    return values.toString();
}

let select_module = function(modules){
    modules.forEach(module => {
    let c = module.getAttribute('class');
    let value = module.getAttribute("id");
    let input_to_load = module.parentElement.querySelector(".input-to-load");
        module.addEventListener('click', function(){
            unselectall(modules, c, input_to_load);
            unselect(type_cycles, "input_multiple");
            if(c === "systeme-educatif signin-module"){
                unselectallEnseignements(type_enseignements, "type-enseignement signin-module");
                unselectallEnseignements(type_cycles, "type-cycle signin-module");
                hideall(cycles, "cycle disabled");
            }
            module.setAttribute('class', c+' selected');
            input_to_load.setAttribute("value", value);  
            show_hide_ens(value);
        });
    }); 
}

let select_multi_module = function(modules){
    modules.forEach(module => {
    let c = module.getAttribute('class'); 
    let value = module.getAttribute("id");
    let input_to_load = module.parentElement.querySelector(".input_multiple");
        module.addEventListener('click', function(){
            if(module.getAttribute("class") === c + " selected"){
                unselectoneEnseignement(module);
                let v = removeValue(module.getAttribute("id"), input_to_load.getAttribute("value"));
                input_to_load.setAttribute("value", v);
            }
            else{
                input_to_load.setAttribute("value", input_to_load.getAttribute("value") + "," + module.getAttribute("id"));                
                module.setAttribute('class', c+' selected');
                show_hide_cycle(value);
            }
        });
    }); 
}    

let show_hide_ens = function(s_e){
    if(s_e === "fr"){
        hideall(enseignements, "enseignement disabled");
        document.getElementById("se-fr").setAttribute("class", "enseignement");
    }
    if(s_e === "uk"){
        hideall(enseignements, "enseignement disabled");
        document.getElementById("se-uk").setAttribute("class", "enseignement");
    }
    if(s_e === "us"){
        hideall(enseignements, "enseignement disabled");
        document.getElementById("se-us").setAttribute("class", "enseignement");
    }
}

let show_hide_cycle = function(ens){
    let item = ""; let input_class = "input-multiple";
    if(ens === "preElementaire"){
        hide(us_cycles, "cycles disabled");
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles");
        document.getElementById("fr-pre-elementaire-cycle").setAttribute("class", "cycle");            
    }
    if(ens === "elementaire"){
        hide(us_cycles, "cycles disabled");
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles");
        document.getElementById("fr-elementaire-cycle").setAttribute("class", "cycle");            
    }
    if(ens === "secondaire"){
        hide(us_cycles, "cycles disabled");
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles");
        document.getElementById("fr-secondaire-cycle").setAttribute("class", "cycle");            
    }
    if(ens === "superieur"){
        hide(us_cycles, "cycles disabled");
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles");
        document.getElementById("fr-superieur-cycle").setAttribute("class", "cycle");            
    }
    /** UK **/
    if(ens === "uk-nursery"){
        hide(us_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(uk_cycles, "cycles");
        document.getElementById("uk-nursery-school").setAttribute("class", "cycle");            
    }
    if(ens === "uk-primary"){
        hide(us_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(uk_cycles, "cycles");
        document.getElementById("uk-primary-school").setAttribute("class", "cycle");            
    }
    if(ens === "uk-secondary"){
        hide(us_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(uk_cycles, "cycles");
        document.getElementById("uk-secondary-school").setAttribute("class", "cycle");            
    }
    if(ens === "uk-higher"){
        hide(us_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(uk_cycles, "cycles");
        document.getElementById("uk-higher-school").setAttribute("class", "cycle");            
    }
    /** US **/
    if(ens === "us-nursery"){
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(us_cycles, "cycles");
        document.getElementById("us-nursery-school").setAttribute("class", "cycle");            
    }
    if(ens === "us-primary"){
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(us_cycles, "cycles");
        document.getElementById("us-primary-school").setAttribute("class", "cycle");            
    }
    if(ens === "us-middle"){
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(us_cycles, "cycles");
        document.getElementById("us-middle-school").setAttribute("class", "cycle");            
    }
    if(ens === "us-higher"){
        hide(uk_cycles, "cycles disabled");
        hide(fr_cycles, "cycles disabled");
        hide(us_cycles, "cycles");
        document.getElementById("us-higher-school").setAttribute("class", "cycle");            
    }
}
window.onload = function(){
    select_module(systemes_educatifs);
    select_module(etablissements);
    select_multi_module(type_enseignements);
    select_multi_module(type_cycles);        
}

next.forEach(n => {        
    n.addEventListener('click', function(e){  
        show_step(get_next_step(get_current_step(n)));
        hide_step(get_current_step(n));
    });
});

prev.forEach(p => {        
    p.addEventListener('click', function(e){  
        show_step(get_prev_step(get_current_step(p)));
        hide_step(get_current_step(p));
    });
});
