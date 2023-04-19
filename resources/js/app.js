import './bootstrap';

const openNav = document.getElementById("openNav");
const closeNav = document.getElementById("closeNav");

openNav.onclick = function(){
    document.getElementById("myNav").style.width = "100%";
    document.getElementById("iframe").style.filter = "blur(12px)";
}

closeNav.onclick = function(){
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("iframe").style.filter = "blur(0px)";
}
