import './bootstrap';

const openNav = document.getElementById("openNav");
const closeNav = document.getElementById("closeNav");

openNav.onclick = function(){
    document.getElementById("myNav").style.width = "100%";
    document.getElementById("video").style.filter = "blur(12px)";
    document.getElementById("landingOverlay").style.filter = "blur(2px)";
    openNav.style.filter = "blur(3px)";
}

closeNav.onclick = function(){
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("video").style.filter = "blur(0px)";
    document.getElementById("landingOverlay").style.filter = "blur(0px)";
    openNav.style.filter = "blur(0px)";
}
