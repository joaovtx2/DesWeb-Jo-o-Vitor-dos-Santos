document.addEventListener("DOMContentLoaded", function() {
    const botao = document.getElementById("botao-interativo");
    const divMensagem = document.getElementById("mensagem-js");

    botao.onclick = function() {
        divMensagem.innerHTML = "<p style='color: green;'>Parabéns você clicou no botão interativo! </p>";
    };
});