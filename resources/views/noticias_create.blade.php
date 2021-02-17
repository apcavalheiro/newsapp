@extends('layouts.app');

@section('conteudo')

    @if(isset($noticia))
    <form method="POST" action="/atualizar_noticia/{{$noticia->id_noticia}}">
    @else
    <form method="POST" action="/salvar_noticia">
    @endif
    {{csrf_field()}}

    <h3>{{ isset($noticia) ? "Atualizar notícia" :  "Nova notícia" }}</h3>
      

    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" value="{{isset($noticia->titulo) ? $noticia->titulo : '' }}" 
        name="text_titulo" placeholder="Título" required/>
    </div>

    <div class="form-group">
        <label for="noticia">Noticia:</label>
        <textarea type="text" class="form-control" id="noticia" name="text_noticia" rows="7" required>{{isset($noticia->texto) ? $noticia->texto : '' }} </textarea>
    </div>

    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" value="{{isset($noticia->autor) ? $noticia->autor : '' }}"
         name="text_autor" placeholder="Autor" required/>
    </div>

    <div class="form-group text-center">
    @if(isset($noticia ) && $noticia->visivel==1)
        <input type="checkbox" name="check_visivel" checked/> Notícia Visivel
    @else
       <input type="checkbox" name="check_visivel"/> Notícia Visivel
    @endif   
    
    </div>

    <div class="form-group text-center">
        <button class="btn btn-primary" role="submit">Salvar</button>
    </div>
    </form>
@endsection
