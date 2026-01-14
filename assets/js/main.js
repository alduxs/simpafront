let map;
let btnHamburger = document.getElementById("bt-hamburger");
let menu = document.getElementById("menu");
let velo = document.getElementById("velo");
let bloqueServicio = document.querySelectorAll(".bloque-servicio");
let btMasInfo = document.getElementById("masinfo");


btnHamburger.addEventListener("click", function () {

  if( menu.classList.contains("open-menu")) {
    velo.style.display = 'none';
  } else {
    velo.style.display = 'block';
  }
  
  menu.classList.toggle("open-menu");
  this.classList.toggle("open");

});


