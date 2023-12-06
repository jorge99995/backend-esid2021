<?php

namespace App\Http\Controllers;


use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{

    public function index()
    {



        $cursos = DB::table('cursos')
            ->select('nombre_curso', 'nombre_categoria', 'cursos.id as index')
            ->join('categorias', 'categorias.id', '=', 'cursos.categoria_id')
            ->get();
        return response()->json($cursos);
    }


    public function create()
    {
        //


    }


    public function store(Request $request)
    {

        $cursos = new Curso();
        $cursos->nombre_curso = $request->input('nombre_curso');
        $cursos->categoria_id = $request->input('nombre_categoria');
        $cursos->save();

        // $empData = ['nombre_curso' => $request->nombre_curso, 'nombre_categoria' => $request->categorias->nombre_categoria];

        return response()->json([

            'status' => 200,
        ]);
    }


    // handle edit an employee ajax request
    public function edit(Request $request)
    {
        $id = $request->id;
        $emp = Curso::find($id);
        return response()->json($emp);
    }

    // handle update an Curso ajax request
    public function update(Request $request)
    {

        $emp = Curso::find($request->emp_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->$request->avatar) {
                Storage::delete('public/images/' . $emp->avatar);
            }
        } else {
            $fileName = $request->emp_avatar;
        }

        $empData = ['nombre_cursos' => $request->nombre_cursos, 'avatar' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an Curso ajax request
    public function destroy($id)
    {
        $curso = Curso::findOrfail($id);
        $curso->delete();
        return response()->json([
            'msg' => 'se elimino correctamente',
        ]);
    }
}
