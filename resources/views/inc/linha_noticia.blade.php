
<div class="rows">

    <div class="col-md-6">
        <strong>{{$dado->titulo}}</strong>
    </div>
    <div class="col-md-3">
        {{$dado->autor}}
    </div>
    <div class="col-md-3 text-right">

        @if($dado->visivel == 1)
        <a href="/invisivel/{{$dado->id_noticia}}">
            <span class="glyphicon glyphicon-eye-open" style="margin-left: 10px;"></span>
        </a>
        @else
        <a href="/visivel/{{$dado->id_noticia}}">
            <span class="glyphicon glyphicon-eye-close" style="margin-left: 10px; color:#ddd;"></span>
        </a>
        @endif

        <a href="/editar_noticia/{{$dado->id_noticia}}">
            <span class="glyphicon glyphicon-pencil" style="margin-left: 10px;"></span>
        </a>

        <a href="/delete_noticia/{{$dado->id_noticia}}">
            <span class="glyphicon glyphicon-trash" style="margin-left: 10px;"></span>
        </a>
    </div>

</div>