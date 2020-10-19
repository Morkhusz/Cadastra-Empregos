@extends('layout.login')

@section('conteudo')
<div class="container-sm">
    <div class="card login">
        <div class="d-flex justify-content-center">
            <img src="https://yt3.ggpht.com/a/AATXAJzZSHTcbAzidHC-SZKmXWBcWjQDELXMNcQdSX8c=s900-c-k-c0xffffffff-no-rj-mo" alt="slogan" class="slogan mt-3">
        </div>
        <div class="card-body">
            @include('error', ['errors' => $errors])
            <form method="post">
                @csrf
                <h5 class="h5 text-center">Aquisição de Talentos</h5>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button class="btn btn-danger btn-block btn-lg">Entrar</button>
            </form>

        </div>
    </div>
</div>

@endsection
