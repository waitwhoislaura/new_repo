window.addEventListener('load', init, false);
function init() {
    let div = document.getElementById('hide-show');
    div.style.display ="none";
    let boton = document.getElementById('hide-show');
    boton.addEventListener('click', function (e) {
        if(div.style.display === "none"){
            div.style.display = "block";
        }else{
            div.style.display = "none";
        }
    }, false);
}