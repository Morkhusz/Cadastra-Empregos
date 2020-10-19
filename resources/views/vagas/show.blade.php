@extends('layout.vagas')

@section('titulo')
    UOTZ | Alterando {{$vaga->nome}}
@endsection

@section('conteudo')
<div class="container-sm">
    <a href="{{route('vagas')}}">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
    </svg>
    </a>
    <h5 class="h5">Editando {{$vaga->nome}}</h5>
    <hr>
    <div class="container-sm">
        <div class="card-body">
            <span class="obrigatorio">*</span> <span class="campo">campos obrigatórios</span>
        </div>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="vaga"><span class="obrigatorio">*</span> Nome da Vaga</label>
                <input type="text" class="form-control" id="vaga" name="vaga" value="{{isset($vaga->nome) ? $vaga->nome : ''}}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pais"><span class="obrigatorio">*</span> País</label>
                    <select id="pais" class="form-control" name="pais">
                        <option selected>{{isset($vaga->pais) ? $vaga->pais : ''}}</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Canadá">Canadá</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade"><span class="obrigatorio">*</span>Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{isset($vaga->cidade) ? $vaga->cidade : ''}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estado"><span class="obrigatorio">*</span> Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="{{isset($vaga->estado) ? $vaga->estado : ''}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="departamento"><span class="obrigatorio">*</span> Departamento</label>
                    <select id="departamento" class="form-control" name="departamento">
                        <option selected>{{isset($vaga->departamento) ? $vaga->departamento : ''}}</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Operações">Operações</option>
                        <option value="Tecnologia">Tecnologia</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipo"><span class="obrigatorio">*</span> Tipo</label>
                    <select id="tipo" class="form-control" name="tipo">
                        <option selected>{{isset($vaga->tipo) ? $vaga->tipo : ''}}</option>
                        <option value="Periodo Integral">Periodo Integral</option>
                        <option value="Estágio">Estágio</option>
                    </select>
                </div>
                @if (isset($vaga->remoto))
                <div class="custom-control custom-switch mt-5 ml-2">
                    <input type="checkbox" class="custom-control-input" id="remoto" name="remoto" checked>
                    <label class="custom-control-label" for="remoto">Somente remoto</label>
                </div>
                @endif

                @if (is_null($vaga->remoto))
                <div class="custom-control custom-switch mt-5 ml-2">
                    <input type="checkbox" class="custom-control-input" id="remoto" name="remoto">
                    <label class="custom-control-label" for="remoto">Somente remoto</label>
                </div>
                @endif
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="descricao"><span class="obrigatorio">*</span> Descrição da Vaga</label>
                    <textarea class="form-control" id="descricao" rows="4" name="descricao">{{isset($vaga->descricao) ? $vaga->descricao : ''}}</textarea>
                </div>
            </div>
            <span class="d-flex justify-content-end">
                <a href="{{route('vagas')}}" class="a-detalhes mr-4 mt-2">Cancelar</a>
                <button class="btn btn-danger">Cadastrar</button>
            </span>
        </form>
    </div>
</div>
@endsection
