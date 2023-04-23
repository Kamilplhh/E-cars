const informations = document.getElementsByClassName("news-block");

for (const information of informations){
    information.addEventListener("click", function () {
        var id = this.id;
        const NewsDesc = document.getElementById("news-description -" + id);
        NewsDesc.style.width = "60vw";
        NewsDesc.style.padding = "2vh";
        setTimeout(function() {
            NewsDesc.style.width = "0";
            NewsDesc.style.padding = "0";
        }, 4000)
    });
}