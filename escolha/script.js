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
    var nome = document.getElementById("nome").value;
    var pagamento = document.getElementById("pagamento").value;

    var url = "https://wa.me/55975785997?text="
        + "Nome: " + nome + "%0a"
        + "Cor: " + corselecionada + "%0a"
        + "Tamanho: " + tamanhoselecionado + "%0a"
        + "Quantidade: " + quantidade + "%0a"
        + "Metodo de pagamento: " + pagamento;

    window.open(url, '_blank').focus();
}