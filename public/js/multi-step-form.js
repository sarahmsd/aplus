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