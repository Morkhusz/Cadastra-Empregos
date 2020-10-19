@extends('layout.vagas')

@section('titulo')
Nova Vaga | UOTZ
@endsection

@section('cabecalho')
<div class="d-flex justify-content-betwenn ml-md-5 pt-3">
    <a href="{{route('vagas')}}">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </svg>
    </a>
    <span class="texto-preto">
        <h5 class="h5 ml-3">Cadastrar nova vaga</h5>
    </span>
</div>

<hr>
@include('error', ['error' => $errors])
<div class="container-sm">
    <div class="p-2">
        <span class="obrigatorio campo">*</span><span class="campo">Campos obrigatórios</span>
    </div>

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="vaga"><span class="obrigatorio">*</span> Nome da Vaga</label>
            <input type="text" class="form-control" id="vaga" name="vaga">
            <div id="mensagemNome"></div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pais"><span class="obrigatorio">*</span>País</label>
                <select id="pais" class="form-control" name="pais">
                    <option selected></option>
                    <option value="Brasil">Brasil</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Canadá">Canadá</option>
                </select>
                <div id="mensagemPais"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="cidade"><span class="obrigatorio">*</span>Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
                <div id="mensagemCidade"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="estado"><span class="obrigatorio">*</span> Estado</label>
                <input type="text" class="form-control" id="estado" name="estado">
                <div id="mensagemEstado"></div>
            </div>

            <div class="form-group col-md-6">
                <label for="departamento"><span class="obrigatorio">*</span> Departamento</label>
                <select id="departamento" class="form-control" name="departamento">
                    <option selected></option>
                    <option value="Marketing">Marketing</option>
                    <option value="Operações">Operações</option>
                    <option value="Tecnologia">Tecnologia</option>
                </select>
                <div id="mensagemDepartamento"></div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tipo"><span class="obrigatorio">*</span>Tipo</label>
                <select id="tipo" class="form-control" name="tipo">
                    <option selected></option>
                    <option value="Periodo Integral">Periodo Integral</option>
                    <option value="Estágio">Estágio</option>
                </select>
                <div id="mensagemTipo"></div>
            </div>

            <div class="custom-control custom-switch mt-5 ml-2">
                <input type="radio" class="custom-control-input" id="remoto" name="remoto">
                <label class="custom-control-label" for="remoto">Somente remoto</label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="descricao"><span class="obrigatorio">*</span> Descrição da Vaga</label>
                <textarea class="form-control" id="descricao" rows="6" name="descricao"></textarea>
                <div id="mensagemDescricao"></div>
            </div>
        </div>
        <span class="d-flex justify-content-end">
            <a href="{{route('vagas')}}" class="a-detalhes btn-lg mr-4 mt-2">Cancelar</a>
            <button class="btn btn-danger btn-lg" onclick="validar()">Cadastrar</button>
        </span>
    </form>
</div>
@endsection
