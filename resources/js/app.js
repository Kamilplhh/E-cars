import './bootstrap';

const openNav = document.getElementById("openNav");
const closeNav = document.getElementById("closeNav");

openNav.onclick = function(){
    document.getElementById("myNav").style.width = "100%";
}

closeNav.onclick = function(){
    document.getElementById("myNav").style.width = "0%";
}
