function validaCandidato() {
    var nome = document.getElementById("nome");
    var sobrenome = document.getElementById("sobrenome");
    var email = document.getElementById("email");
    var telefone = document.getElementById("telefone");
    var motivo = document.getElementById("motivo");
    var conhece = document.getElementById("conhece");

    if (nome.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemNome");
        mensagem.textContent = "Informe um nome com no minímo 4 letras";
        nome.focus();
        return;
    }

    if (sobrenome.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemSobrenome");
        mensagem.textContent = "Informe um o seu sobrenome";
        sobrenome.focus();
        return;
    }

    if (email.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemEmail");
        mensagem.textContent = "Informe sua e-mail";
        email.focus();
        return;
    }

    if (telefone.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemTelefone");
        mensagem.textContent = "Informe o telefone ou Celular";
        telefone.focus();
        return;
    }

    if (motivo.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemMotivo");
        mensagem.textContent = "Informe um motivo com 20 letras";
        motivo.focus();
        return;
    }

    if (conhece.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemConhece");
        mensagem.textContent = "Informe o conhece de trabalho";
        conhece.focus();
        return;
    }

    if (arquivo.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemArquivo");
        mensagem.textContent = "Anexe um arquivo de curriculo";
        arquivo.focus();
        return;
    }

}

function limpa() {
    if (document.getElementById('form').value != "") {
        document.getElementById("nome").value = "";
        document.getElementById("sobrenome").value = "";
        document.getElementById("email").value = "";
        document.getElementById("telefone").value = "";
    }
}

function limpaDetalhe() {
    if (document.getElementById('form').value != "") {
        event.preventDefault();
        
        document.getElementById("motivo").value = "";
        document.getElementById("conhece").value = "";
    }
}

