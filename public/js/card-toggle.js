let toggle_btn = document.querySelectorAll('.icon-toggle');
toggle_btn.forEach(btn => {
    let bloc = btn.parentElement.parentElement.parentElement.lastElementChild;
    btn.addEventListener('click', function(){
        if(bloc.classList.contains('disabled')){
            bloc.classList.remove("disabled");                    
            btn.classList.add("toggled");
            bloc.classList.add("toggled");                    
        }else{
            bloc.classList.add("disabled");
            btn.classList.remove("toggled");
            bloc.classList.remove("toggled");
        }               
    });
});