@extends('layout.vagas')

@section('titulo')
Candidatar-se | UOTZ
@endsection

@section('conteudo')
<div class="cabecalho-detalhes">
    <div>
        <h5 class="h5 text-center p-3">Software Engineer</h5>
        <p class="text-center">
            Tecnologia . São Paulo. Brasil. Periodo Integral . Remoto
        </p>
        <hr>
        <span class="d-flex justify-content-center">
            <div>
                <p class="text-center mr-4 ">Detalhes da Vaga</>
            </div>
            <div class="div-link">
                <p class=" text-center">Candidatar - se</p>
            </div>
        </span>
    </div>
</div>

<div class="container-sm mt-3">
    @includeIf('error', ['errors' => $errors])
    <span class="d-flex justify-content-between">
        <h4 class="h4">Informações pessoais</h4>
        <button class="btn btn-secondary" onclick="limpa()">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
            </svg>
            Limpar
        </button>
    </span>
    <hr>
    <form method="post" enctype="multipart/form-data" id="form">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome"><span class="obrigatorio mr-2">*</span>Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
                <div id="mensagemNome"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="sobrenome"><span class="obrigatorio mr-2">*</span>Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                <div id="mensagemSobrenome"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email"><span class="obrigatorio mr-2">*</span>E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
                <div id="mensagemEmail"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="tel"><span class="obrigatorio mr-2">*</span>Telefone</label>
                <input type="tel" class="form-control" id="tel" name="telefone">
                <div id="mensagemTelefone"></div>
            </div>
        </div>

        <input type="file" id="curriculo" name="arquivo">

        <span class="d-flex justify-content-between mt-3">
            <h4 class="h4">Detalhes</h4>
            <button class="btn btn-secondary" onclick="limpaDetalhe()">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
                Limpar
            </button>
        </span>
        <hr>
        <div class="form-group">
            <div class="form-group">
                <label for="motivo">
                    <span class="obrigatorio mr-2">*</span>
                    Porque devemos contratá-lo? (em vez de outro candidato principal em sua área).
                </label>
                <textarea class="form-control" id="motivo" rows="4" name="motivo"></textarea>
                <div id="mensagemMotivo"></div>
            </div>
            <div class="form-group">
                <label for="conhece">
                    <span class="obrigatorio mr-2">*</span>
                    Você conhece alguém que trabalha na UOTZ? Se sim, escreva o nome dele aqui :)
                </label>
                <textarea class="form-control" id="conhece" rows="4" name="conhece"></textarea>
                <div id="mensagemConhce"></div>
            </div>
        </div>

        <button class="btn btt-cor btn-lg btn-block" onclick="validaCandidato()">Enviar minha candiatura</button>
    </form>

</div>

</div>
@endsection
