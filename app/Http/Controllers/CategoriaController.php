<?php

namespace App\Http\Controllers;


use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categoria = Categoria::all();
        return response()->json($categoria);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $categorias = Categoria::create($request->all());
        return response()->json(['msg' => 'se creo correctament'], 200);
    }


    public function show($id)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        //

    }

    public function update(Request $request, $id)
    {
        //
        $categorias  = Categoria::findOrFail($id);
        $categorias->update($request->all());
        return response()->json(['msg' => 'se actualizo correctament'], 200);
    }

    public function destroy($id)
    {
        $categorias  = Categoria::findOrFail($id);
        $categorias->delete();
        return response()->json(["message" => 200]);
    }
}
