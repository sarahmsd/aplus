let btn_toggle_sidebar = document.getElementById("btn-toggle-sidebar");
let sidebar = document.querySelector(".sidebar");
let parentSidebar = sidebar.parentElement;
btn_toggle_sidebar.addEventListener("click", function(e){
    e.preventDefault();
    if(sidebar.classList.contains("toggled")){
        sidebar.classList.remove("toggled");
        parentSidebar.classList.remove("toggled");
    }else{
        sidebar.classList.add("toggled");
        parentSidebar.classList.add("toggled");
    }
});