var corselecionada
var tamanhoselecionado

function selectedsize(y) {

    tamanhoselecionado = y.querySelector("p").innerHTML;

}
function collorselect(x) {

    corselecionada = x.querySelector("span").innerHTML;

}

function gotowhatsapp() {

    var quantidade = document.getElementById("quantidade").value;

    var url = "https://wa.me/55975785997?text="
        + "Cor: " + corselecionada + "%0a"
        + "Tamanho: " + tamanhoselecionado + "%0a"
        + "Quantidade: " + quantidade; 

    window.open(url, '_blank').focus();
}

