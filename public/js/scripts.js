
function validar() {
    var vaga = document.getElementById("vaga");
    var pais = document.getElementById("pais");
    var cidade = document.getElementById("cidade");
    var estado = document.getElementById("estado");
    var departamento = document.getElementById("departamento");
    var tipo = document.getElementById("tipo");
    var descricao = document.getElementById("descricao");

    if (vaga.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemNome");
        mensagem.textContent = "Informe um nome com no minímo 4 letras";
        vaga.focus();
        return;
    }

    if (pais.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemPais");
        mensagem.textContent = "Informe um País";
        pais.focus();
        return;
    }

    if (cidade.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemCidade");
        mensagem.textContent = "Informe sua cidede";
        cidade.focus();
        return;
    }

    if (estado.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemEstado");
        mensagem.textContent = "Informe o estado da sua cidade";
        estado.focus();
        return;
    }

    if (departamento.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemDepartamento");
        mensagem.textContent = "Informe um departamento";
        departamento.focus();
        return;
    }

    if (tipo.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemTipo");
        mensagem.textContent = "Informe o tipo de trabalho";
        tipo.focus();
        return;
    }

    if (descricao.value == "") {
        event.preventDefault();
        var mensagem = document.querySelector("#mensagemDescricao");
        mensagem.textContent = "Faça uma descrição da vaga com no minímo 30 letras";
        descricao.focus();
        return;
    }

}

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

