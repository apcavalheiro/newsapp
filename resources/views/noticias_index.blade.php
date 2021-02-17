@extends('layouts.app');

@section('conteudo')

@if (count($dados)==0)
<p class="alert alert-danger"> Não temos noticias cadastradas!</p>

@else

    @php
        $total = 0;
    @endphp

@foreach($dados as $dado)

    @if($dado->visivel == 1)
    <div class="row bg-info">
        <div class="col-md-9">
            <h2>{{$dado->titulo}}</h2>
        </div>    
        <div class="col-md-3 text-right" style="padding-top:10px;">
          <span class="glyphicon glyphicon-pencil"></span> {{ $dado->autor }}
            
          <span class="glyphicon glyphicon-time"></span> {{ $dado->updated_at->diffForHumans() }}
        </div>    
    </div>

    <div class="row">
         <div class="col-md-12" style="padding-top:5px;">
            {{$dado->texto}}
        </div>    
    </div>
    <hr>
    @php
        $total++;
    @endphp

    @endif
@endforeach

    <div class="row">
         <div class="col-md-12 text-right" style="padding-top:5px;">
            <p>Nº total de notícias {{$total}}</p>
        </div>    
    </div>

@endif
@endsection