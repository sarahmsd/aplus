window.onscroll = function() {scroll_func()};

let navbar = document.getElementById("navbar");
let sticky = navbar.offsetTop;
let menu = document.getElementById("header-menu");
let bt_menu = document.getElementById("bt-menu");
function scroll_func() {
  if (window.pageYOffset >= sticky) {
    bt_menu.classList.add("disabled");
    menu.classList.remove("disabled");
    navbar.classList.add("sticky");
  } else {
    bt_menu.classList.remove("disabled");
    menu.classList.add("disabled");
  }

  if(window.pageYOffset == 0){
    bt_menu.classList.remove("disabled");
    menu.classList.add("disabled");
    navbar.classList.remove("sticky");
  }
}