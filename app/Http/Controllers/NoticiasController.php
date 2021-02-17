<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
        $dados = Noticia::all();
        return view('noticias_index', compact('dados'));
    }

    public function create()
    {
        return view('noticias_create');
    }

    public function store(Request $request)
    {
        $noticia = new Noticia;
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_noticia;
        $noticia->autor = $request->text_autor;

        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        }else{
            $noticia->visivel = 0;
        }
        
        $noticia->save();

        return \redirect('/');
    }

    public function apresentarListaGestao()
    {
        $dados = Noticia::all();
        return view('noticias_gestao', compact('dados'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $noticia = Noticia::find($id);
        return view('noticias_create', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
        $noticiaDb = Noticia::find($id);
        $noticiaDb->titulo = $request->text_titulo;
        $noticiaDb->texto = $request->text_noticia;
        $noticiaDb->autor = $request->text_autor;

        if(isset($request->check_visivel)){
            $noticiaDb->visivel = 1;

        }else{
            $noticiaDb->visivel = 0;
        }
        $noticiaDb->save();

        return \redirect('/gerir_noticias');
    }

    public function destroy($id)
    {
        Noticia::destroy($id);
        return \redirect('/gerir_noticias');
    }

    public function noticiaVisivel($id)
    {
        $noticia = Noticia::find($id);
        $noticia->visivel = 1;
        $noticia->save();
        return \redirect('/gerir_noticias');
    }

    public function noticiaInvisivel($id)
    { 
        $noticia = Noticia::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return \redirect('/gerir_noticias');
    }
}
