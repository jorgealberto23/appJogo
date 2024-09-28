@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Cadastro de Jogos</h2>
    <form method="post" action="{{route('cadastra-jogos')}}">
        @csrf <!-- Para o Laravel, adicione esta linha para o token CSRF -->

        <div class="form-group">
            <label for="nomeJogo">Nome do Jogo</label>
            <input type="text" class="form-control" id="nomeJogo" name="nomeJogo" required>
        </div>

        <div class="form-group">
            <label for="empresaJogo">Empresa</label>
            <input type="text" class="form-control" id="empresaJogo" name="empresaJogo" required>
        </div>

        <div class="form-group">
            <label for="plataformaJogo">Plataforma</label>
            <input type="text" class="form-control" id="plataformaJogo" name="plataformaJogo" required>
        </div>

        <div class="form-group">
            <label for="lancamentoJogo">Data de Lançamento</label>
            <input type="date" class="form-control" id="lancamentoJogo" name="lancamentoJogo" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Jogo</button>
    </form>
</div>

@endsection