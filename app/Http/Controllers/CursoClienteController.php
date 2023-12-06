<?php

namespace App\Http\Controllers;


use App\Models\cursocliente;
use Illuminate\Http\Request;

class CursoClienteController extends Controller
{

    public function index()
    {
        $datos = cursocliente::all();
        return response()->json($datos);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        //
    }


    public function edit()
    {
        //
    }


    public function update(Request $request)
    {
        //
    }


    public function destroy()
    {
        //
    }
}
