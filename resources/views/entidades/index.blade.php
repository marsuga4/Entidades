@extends('entidades.layout')
<header class="row">
        @include('entidades.header')
</header>

@section('conteudo')
@if(session('msg'))  
    <div class="alert alert-danger">
        {{ session()->get('msg') }}
    </div>
@endif    

<div class="container">

  <br> 
  <form class="form-inline" method="get" action="{{ route('entidade.show') }}">       
    <label for="mci" class="mb-2 mr-sm-2">MCI:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="mci" name ="mci" style="max-width:120px;" maxlength="9" placeholder="Digite o MCI" name="mci">    
    <button type="submit" class="btn btn-primary mb-2">Consultar</button>
  </form>
</div>

    
@endsection
