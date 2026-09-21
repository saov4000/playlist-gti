<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musica;

class MusicaController extends Controller
{
    public function index()
    {
        return Musica::all(); //método all() faz o select na tabela
    }

    public function store(Request $request)
    {
        //Musicas::create($request->all());
        try{
            $musica = Musica::create($request->all());
            return response()->json($musica,201);
        }catch(\Exception $e){
            return response()->json([
                'success'=>false,
                'erro'=>$e->getMessage()
            ],500);
        }
    }

    public function show(string $id)
    {
        return Musica::findOrFail($id); //pesquisar por id
    }

    public function update(Request $request, string $id)
    {
        $musica = Musica::findOrFail($id); //verifica se o registro existe
        return $musica->update($request->all());
    }

    public function destroy(string $id)
    {
        return Musica::destroy($id); //deleta o resgistro
    }
}
