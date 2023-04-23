const offersNavbutton = document.getElementById("offersNavbutton");
const offersNav = document.getElementById("offersNav");

offersNavbutton.onclick = function(){
    offersNav.style.height = "12vh";
    setTimeout(function() {
        offersNav.style.height = "0%";
    }, 4000)
}