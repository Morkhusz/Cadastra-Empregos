@extends('layout.vagas')

@section('titulo')
    Vagas | UOTZ
@endsection

@section('cabecalho')
<div class="cabecalho p-3">
    <h5 class="h5 texto-preto">Carreiras na UOTZ</h5>
    <hr>
    <p class="cabecalho-p">
        Destacamos pessoas que vão além, <b>originais, apaixonadas, proativas, comunicativas e flexíveis</b>. Pessoas com perfil <b>analítico,
        desafiador, investigativo, e crítico, boa capacidade de relacionamento, perfil hands on, versátil e muita vontade de fazer
        acontecer</b>. Interesse em sistemas, tecnologias, novidades do <b>ambiente digital e ferramentas ágeis</b>.
    </p>
    <p class="cabecalho-p">
        Se você gosta de <b>trabalhar em equipe</b> e possui <b>inciativas para resolver problemas</b>, com certeza é a pessoa ideal para ser <span class="color-p">UOTER</span>.
    </p>
</div>
@endsection

@section('conteudo')
    <div class="container-sm">
        <span class="d-flex justify-content-between">
            <h5 class="h5 mb-4 p-3 texto-preto">Vagas de emprego</h5>
            <p class="p-3">
                {{$contagem ?? ''}} vagas de emprego
            </p>
        </span>
        <form action="{{route('search')}}" method="post">
            @csrf
            <span class="d-flex justify-content-between mb-2 align-items-center">
                <button class="btn btn-primary align-items-center">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </button>
                <input class="form-control form-control-md" type="text" placeholder="Pesquisar vagas de emprego" name="search">
            </span>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="local"></label>
                    <select id="local" class="form-control" name="local">
                        <option selected>Local</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="departamento"></label>
                    <select id="departamento" class="form-control" name="departamento">
                        <option selected>Departamento</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Operações">Operações</option>
                        <option value="Tecnologia">Tecnologia</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                <label for="tipo"></label>
                    <select id="tipo" class="form-control" >
                        <option selected>tipo de emprego</option>
                        <option value="Periodo Integral">Periodo Integral</option>
                        <option value="Estagio">Estagio</option>
                    </select>
                </div>

                <div class="custom-control custom-switch mt-4">
                    <input type="checkbox" class="custom-control-input" id="remoto" name="remoto">
                    <label class="custom-control-label" for="remoto">Somente remoto</label>
                </div>

            </div>
        </form>
        @includeIf('mensagem', ['mensagem' => $mensagem])
        <ul class="list-group">
            @foreach($vagas as $vaga)
            <li class="list-group-item lista">
                <span class="d-flex justify-content-between">
                    <p>
                        publicado {{date('d-m-Y', strtotime($vaga->created_at))}}
                    </p>
                    @auth
                    <span class="d-flex align-items-center">
                        <a href="vagas/edita/{{$vaga->id}}" class="btn btn-secondary btn-sm mr-1">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>
                        <form method="post" action="vagas/{{$vaga->id}}/remover" onsubmit="return confirm('Tem certeza que deseja excluir {{$vaga->nome}}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>
                            </button>
                        </form>
                    </span>
                    @endauth
                </span>
                <a href="vagas/detalhes/{{$vaga->id}}" class="a-vaga">
                    <h6 class="h5">{{$vaga->nome}}</h6>
                </a>
                <div>
                    <h6 class="descricao">
                        {{$vaga->departamento}}
                    </h6>

                    <h6 class="descricao">
                        {{$vaga->cidade}}, {{$vaga->estado}} ,{{$vaga->pais}}
                    </h6>

                    <h6 class="descricao">
                        {{$vaga->tipo}}
                    </h6>

                    @if (!is_null($vaga->remoto))
                    <h6 class="descricao">
                        Remoto
                    </h6>
                    @endif

                </div>
            </li>
            @endforeach
            <li class="list-group-item lista">
                <span class="d-flex justify-content-between">
                    <p class="h6 ml-3">
                        Não encontrou o cargo certo? Envie o seu currículo por e-mail para ser considerado
                        para novas vagas no futuro.
                    </h5>
                    <button class="btn">
                        <a href="#" class="btn btn-danger btn-sm">enviar meu curriculo por e-mail</a>
                    </button>
                </span>
            </li>
          </ul>
    </div>
@endsection
