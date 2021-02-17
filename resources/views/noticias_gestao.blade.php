@extends('layouts.app');

@section('conteudo')

@if (count($dados)==0)
    <p class="alert alert-danger"> Não temos noticias cadastradas!</p>
@else
    @foreach($dados as $dado)

        @include('inc.linha_noticia')

    @endforeach
@endif
@endsection