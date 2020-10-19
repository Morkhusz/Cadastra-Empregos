@extends('layout.vagas')

@section('titulo')
{{$detalhe->nome}} | UOTZ
@endsection

@section('conteudo')
<div class="cabecalho-detalhes">
    <div>
        <h5 class="h5 text-center p-3">{{$detalhe->nome}}</h5>
        <p class="text-center">
            <div class="d-flex justify-content-center">
                <h6 class="descricao">
                    {{$detalhe->departamento}}
                </h6>

                <h6 class="descricao">
                    {{$detalhe->cidade}},{{$detalhe->pais}}
                </h6>

                <h6 class="descricao">
                    {{$detalhe->tipo}}
                </h6>

                @if (!is_null($detalhe->remoto))
                <h6 class="descricao">
                    Remoto
                </h6>
                @endif
            </div>
        </p>
        <hr>
        <span class="d-flex justify-content-center">
            <div class="div-link">
                <a href="" class="a-detalhes text-center mr-4 ">Detalhes da Vaga</a>
            </div>
            <div>
                <a href="/vagas/detalhes/candidatar/{{$detalhe->id}}" class="a-detalhes text-center">Candidatar - se</a>
            </div>
        </span>
    </div>
</div>

<div class="container-sm">
    <div class="card-body">
        <h5 class="h5">Proteja-se do Coronavírus:</h5>
        <p>Com a propagação cada vez mais rápida do novo Coronavírus (Covid-19), nós priorizamos a segurança de
            colaboradores, parceiros, clientes e candidatos. Por isso, todos os nossos times estão trabalhando de casa.
            Além disso, adaptamos também todos os processos seletivos para que você possa realizar as etapas sem
            sair de casa e se mantendo em segurança.
        </p>
        <h5 class="h5">Sobre a UOTZ:</h5>
        <p>Há mais de 15 anos trabalhamos a experiência de clientes reais em inteligência aplicada aos negócios.
            Somos pioneiros na criação da Jornada do Cliente, metodologia que mapeia todos os pontos de contato
            com as marcas para gerar insights transformadores para decisões táticas e estratégicas dos nossos parceiros.
        </p>
        <h5 class="h5">Na UOTZ você vai:</h5>
        <ul>
            <li>
                Trabalhar com um time excelente que utiliza as melhores práticas e ferramentas do mercado;
            </li>

            <li>
                Aprender bastante;
            </li>

            <li>
                Fazer parte de um projeto de alto impacto;
            </li>

            <li>
                Trabalhar em um ambiente com hierarquia horizontal;
            </li>
        </ul>
        <h5 class="h5">Responsabilidades {{$detalhe->nome}}:</h5>
        <p class="conteudo-p-detalhes">
            {{$detalhe->descricao}}
        </p>
    </div>

    <a href="vagas/detalhes/candidatar/{{$detalhe->id}}" class="btn btn-danger btn-block btn-lg">Candidatar-se para essa vaga</a>
</div>

@endsection
