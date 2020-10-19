
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
