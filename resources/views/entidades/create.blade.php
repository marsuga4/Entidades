@extends('entidades.layout')

@section('cabecalho')
Adicionar Entidade
@endsection

@section('conteudo')
    <form method="post">
        <!-- diretiva do laraval para o erro de página não encontrada -->
        @csrf
        <div class="form-group">
            <label for="cd_cli">MCI</label>
            <input type="text" class="form-control" name="cd_cli" id="cd_cli">
            <label for="nome">Entidade</label>
            <input type="text" class="form-control" name="nome" id="nome">
            <label for="cd_atv">CÓD ATV</label>
            <input type="text" class="form-control" name="cd_atv" id="cd_atv">
            <label for="nom_atv">ATIVIDADE</label>
            <input type="text" class="form-control" name="nom_atv" id="nom_atv">
            <label for="cd_nat">CÓD NATUREZA</label>
            <input type="text" class="form-control" name="cd_nat" id="cd_nat">
            <label for="nom_nat">NOM NATUREZA</label>
            <input type="text" class="form-control" name="nom_nat" id="nom_nat">


        </div>
        <button class="btn btn-primary">Adicionar</button>
    </form>
@endsection


